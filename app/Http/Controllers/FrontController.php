<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

        // controller pour l'affichage des derniers products 
        $products = Product::latest()->with('picture', 'category')->paginate(6); // pagination 


        return view('front.index', ['products' => $products]);
    }

    // controller de la page solde

    public function sale()
    {

        $products = Product::with('picture')->where('state', 'sale')->paginate(6); // pagination 


        return view('front.sale', ['products' => $products]);
    }


    // Controller de la page homme
    public function man()
    {

        $products = Product::with('category')->where('category_id', '1')->paginate(6); // pagination 

        return view('front.man', ['products' => $products]);
    }


    // Controller de la page femme
    public function woman()
    {

        $products = Product::with('category')->where('category_id', '2')->paginate(6); // pagination 



        return view('front.woman', ['products' => $products]);
    }
}
