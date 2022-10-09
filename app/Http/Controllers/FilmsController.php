<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FilmsController extends Controller
{
    public function index (Request $request){
        $responce = Http::get('https://www.breakingbadapi.com/api/characters/');
        $films = $responce->json();
        return view('films', compact('films'));

    }
}
