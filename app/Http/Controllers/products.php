<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class products extends Controller
{
    //
    public function register(){
        return view ('product.register');
    }
    //use App//http/model
    public function store(Request $request){
        $product=new product();
        $product->name=$request->name;
        $product->unit=$request->unit;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $is_successed=$product::save();
        if(is_successed)
        echo"recurd saved successefully";
        else
        echo"something event wrong Try again";
        

    }
}
