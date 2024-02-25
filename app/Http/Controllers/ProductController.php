<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
        public function foodBeverage()
    {
        return view('product.foodBeverage');
    }
    
    public function beautyHealth()
    {
        return view('product.beautyHealth');
        
    }
    
    public function homeCare()
    {
        return view('product.homeCare');
        
    }
    
    public function babyKid()
    {
        return view('product.babyKid');
         
    }

}
