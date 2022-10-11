<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuotesController extends Controller
{
    public function index(Request $request){
        $responce = Http::get('https://favqs.com/api/qotd');
        $quote = [$responce->json()][0]['quote'];   
        return view('quotes', compact('quote'));
    }
    
}
