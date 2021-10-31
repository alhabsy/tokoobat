<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function cart(){
        return view('cart');
    }
    public function single_product(){
        return view('single-product');
    }
    public function product(){
        return view('product');
    }
    public function checkout(){
        return view('checkout');
    }
}
