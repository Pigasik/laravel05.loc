<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart(){

        $cart = session()->get('cart', []);
        dump($cart);
    }

    public function addToCart(){
        
    }
}
