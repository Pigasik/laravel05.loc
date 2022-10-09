<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AmrShawky\LaravelCurrency\Facade\Currency;

class CurrencyController extends Controller
{
    public function index(Request $request)
    {
        $converted = '';

        $dd = Currency::rates()
        ->latest()
        ->get();
        // dd($dd);

        if ($request->filled('currency_from')) {
            $convertedObj = Currency::convert()
                        ->from($request->get('currency_from'))
                        ->to($request->get('currency_to'))
                        ->amount($request->get('amount'));

                    if($request->filled('date')){
                        $convertedObj = $convertedObj->date($request->get('date'));
                    }

            $converted = $convertedObj->get();
        }
        return view('currency',compact('converted'));
    }
}