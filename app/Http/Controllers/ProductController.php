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
    public function getproductform(){
    	return view("producttable.productform");
    }
    public function postproductform(request $request){
    	$nameproduct = $request->nameproduct;
    	$priceproduct = $request->priceproduct;
    	$buyday = $request->buyday;
    	$add = new Product;
    	$add->NameProduct = $nameproduct;
    	$add->PriceProduct = $priceproduct;
    	$add->BuyDay = $buyday;
    	$add->save();
    }
    public function getproductaddform(){
    	return view("producttable.productadd");
    }
    public function postproductaddform(request $request){
    	$nameproduct = $request->nameproduct;
    	$priceproduct = $request->priceproduct;
    	$buyday = $request->buyday;
    	$add = new Product;
    	$add->NameProduct = $nameproduct;
    	$add->PriceProduct = $priceproduct;
    	$add->BuyDay = $buyday;
    	$add->save();
    }
    public function getproducteditform(){
    	return view("producttable.productedit");
    }
    public function postproducteditform(request $request){
    	$id  = $request->id;
    	$nameproduct = $request->nameproduct;
    	$priceproduct = $request->priceproduct;
    	$buyday = $request->buyday;
    	$edit = Product::find($id);
    	$edit->id = $id;
    	$edit->NameProduct = $nameproduct;
    	$edit->PriceProduct = $priceproduct;
    	$edit->BuyDay = $buyday;
    	$edit->update();

    }
   public function getproductdeleteform(){
   	return view("producttable.productdelete");
   }
   public function postproductdeleteform(request $request){
   	$id = $request->id;
   	$delete = Product::find($id);
   	$delete ->delete();
   }
}
