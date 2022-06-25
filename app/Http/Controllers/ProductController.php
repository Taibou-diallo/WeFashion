<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $paginate = 15;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // la methode qui affiche tous les produits apres la connexion de l admin
    public function admin()
    {

        $products = Product::paginate($this->paginate);

        return view('back.admin', compact('products'));
    }

    // la methode qui affiche les produits du CRUD  produit
    public function index()
    {

        $products = Product::paginate($this->paginate);

        return view('back.product.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $sizes = Size::pluck('name', 'size_id')->all();
        $category = Category::pluck('name', 'id')->all();
        return view('back.product.create', compact('category'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:100|string',
            'description' => 'required',
            'price' => 'required',
            'visibilty' => 'required',
            'state' => 'required',
            'reference' => 'required',
            'category' => 'required',
        ]);

        $image = $request->file('picture');

        if (!empty($image)) {
            $request->file('picture')->store('images');
            $link = $request->file('picture')->hashName();

            $request->picture()->create([
                'link' => $link,
                'title' => $request->title_image ?? 'Default',
            ]);
        }


        Product::create($validated);

        return redirect()->route('back.product.index')->with('message', 'Produit cree avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        //



        $category = Category::pluck('name', 'id')->all();
        // $sizes = Size::pluck('name', 'id')->all();
        // $sizes = [];
        // foreach ($product->sizes as $size) {
        //     $sizes[] = $size->id;
        // }

        return view('back.product.create', compact('product', 'category', 'sizes', 'productSizes'));
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
