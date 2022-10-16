<?php

namespace App\Console\Commands;

use App\Http\Controllers\Helpers\SaveRatesClass;
use Illuminate\Console\Command;

class SaveRatesDBCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save:rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save Exchange Rates in DB';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $rate = new SaveRatesClass();
            $rate->saveRates();           
        } catch (\Exception $exception){
            $this->info($exception->getMessage());
        }
    }
}
