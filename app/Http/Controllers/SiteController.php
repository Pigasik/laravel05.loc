<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function __invoke(){
        
        $latestProduct = Product::query()
        //->select(['id', 'name', 'image'])
        ->where('active', 1)
        //->orderBy('id', 'desc') или
        ->limit(10)
        ->latest()
        ->get();             
        return view('site.index', compact('latestProduct'));
    }
}
