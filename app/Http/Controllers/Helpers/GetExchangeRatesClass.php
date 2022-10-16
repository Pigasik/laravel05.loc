<?php

namespace App\Http\Controllers\Helpers;

use Illuminate\Support\Facades\Http;

class GetExchangeRatesClass
{
    public function getRates(){

        try {
            $response = Http::retry(3, 200)->get('https://www.nbrb.by/api/exrates/rates?periodicity=0');
            if ($response->status() !== 200){
                throw new \Exception('Ошибка сервера');
            }
            $rates = $response->json();
            return $rates;
        } catch (\Exception $exception){
            return 0;
        }
    }
}
