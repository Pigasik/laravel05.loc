<?php

namespace App\Console\Commands;

use App\Mail\FirstMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class FirstCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pars:nbrb {currency?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        //$result = $this->argument('result');
        $currency = $this->argument('currency');
        $curs_name = [];
        $value = [];
        $scale = []; 
        

        $responce = Http::get('https://www.nbrb.by/api/exrates/rates?periodicity=0');
        $currencies = $responce->json();
        foreach ($currencies as $curs){
            $curs_name[] = $curs['Cur_Abbreviation'];
            $value[] = $curs['Cur_OfficialRate'];
            $scale[] = $curs['Cur_Scale'];                                          
            }
                            
            $currency = $this->ask('В валюту вы хотите поменять белки?');
            $val = $this->ask('Сколько');            
            $key = array_search($currency, $curs_name);
            if(in_array($currency, $curs_name)){
            $curs_name = $currency;
            $value = $value[$key];
            $scale = $scale[$key];
            }
            $result = ($val/$value)*$scale;     
            $this->info($result);
            $mail = new FirstMail($result, 'v_pigasova@mail.ru');
            Mail::send($mail);
        
        
        return 0;
    }
}
