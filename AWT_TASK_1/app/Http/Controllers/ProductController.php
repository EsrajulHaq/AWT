<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct(){
        for($i =0;$i<5;$i++){
            $item = array(
                "name" => "Product ".$i+1,
                "price" => (1000+$i)." TK",
                "code" => "00".$i+1
            );
            $products[] = (object)$item;
        }
        return view('Product.productList')->with('products',$products);
    }
}
