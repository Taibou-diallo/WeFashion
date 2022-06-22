<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // controller de la page liste des produits
    public function product()
    {

        $products = Product::paginate(6); // pagination 
        // $products = Product::latest('products')->paginate(6); // pagination 


        return view('front.product', ['products' => $products]);
    }
}
