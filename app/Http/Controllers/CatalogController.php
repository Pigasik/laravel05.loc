<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function __invoke(){
        $products = Product::query()->where('active', 1)->limit(9)->latest()->get();   
        return view('site.store', compact('products'));
    }

}
