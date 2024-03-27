<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function product(){

        $products= product::get();     
        return view('product',compact('products'));
    }

    public function show(product $product){
        
        return view('product_det',compact('product'));

    }

    public function purchase(product $product){
       return view('purchase',compact('product'));
    }
}
