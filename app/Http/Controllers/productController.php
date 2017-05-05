<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class productController extends Controller
{
   public function getIndex(){
   		$products = Product::all(); //fetch all product form Product
   	 	return view('shop.index' , ['products' => $products]); // return the data
   }
}
