<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getProduct(){
    	return view("producttable.product");
    }
    public function postProductAdd(Request $request){
    	$add = new Product;
    	$add->NameProduct = "Sua1";
    	$add->PriceProduct = 1000002;
    	$add->BuyDay ="2022/6/3";
    	$add->save();
    }
    public function postProductUpdate(Request $request){
    	$update = Product::find('4');
    	$update ->NameProduct = 'kem';
    	$update->update();
    }
    public function postProductDelete(request $request){
    	$update = Product::find('3');
    	$update->delete();
    }
}
