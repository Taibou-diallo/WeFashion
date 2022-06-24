<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    // controller pour l'affichage des derniers products 
    public function index()
    {

        $products = Product::latest()->with('picture', 'category')->where('visibility', 'publish')->paginate(6); // pagination 

        return view('front.index', ['products' => $products]);
    }


    // controller de la page solde
    public function sale()
    {

        $products = Product::with('picture')->where('state', 'sale')->where('visibility', 'publish')->paginate(6); // pagination 

        return view('front.sale', ['products' => $products]);
    }


    // Controller de la page homme
    public function man()
    {

        $products = Product::with('category')->where('category_id', '1')->where('visibility', 'publish')->paginate(6); // pagination 

        return view('front.man', ['products' => $products]);
    }


    // Controller de la page femme
    public function woman()
    {

        $products = Product::with('category')->where('category_id', '2')->where('visibility', 'publish')->paginate(6); // pagination 

        return view('front.woman', ['products' => $products]);
    }

    // controller pour la recuperation d'un seul livre 
    public function show(int $id)
    {
        $product = Product::find($id);

        return view('front.show', compact('product'));
    }
}
