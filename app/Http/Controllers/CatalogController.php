<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function __invoke(Request $request){
        //dd(session()->getId('_token'));
        // session()->put('test', [1, 2, 3]);
        // session()->push('test2', '12345');
        // dump(session()->all());
        $products = Product::query()
        ->where('active', 1)
        ->limit(9)
        ->with('category')
        //->latest()
        ->get();   
        $categories = Category::withCount('products')->get();
        return view('site.store', compact('products', 'categories'));
    }

}
