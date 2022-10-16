<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Helpers\GetExchangeRatesClass;
use App\Models\ExchangeRates;

class SaveRatesClass extends GetExchangeRatesClass
{

    public function saveRates(){
        
            foreach (GetExchangeRatesClass::getRates() as $rates) {

                ExchangeRates::create(
                    [
                        'Cur_Abbreviation' => $rates['Cur_Abbreviation'],
                        'Cur_OfficialRate' => $rates['Cur_OfficialRate']*10000,
                        'Cur_Scale' => $rates['Cur_Scale']             
                    ]
                );
            }
    }
}