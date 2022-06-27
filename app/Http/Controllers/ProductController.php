<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $sizes = Size::all();
        $Productcategories = Category::orderBy('name')->get();

        return view('back.product.create', compact('sizes', 'Productcategories'));
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
            'description' => 'required|max:100|string',
            'price' => 'required|integer',
            'vibility' => 'required',
            'state' => 'required',
            'reference' => 'required|max:16',
            'category_id' => 'required|integer',
            'picture' => 'required|file',
            'sizes*' => 'required|max:100|string',
        ]);

        Product::create($validated);

        $product = Product::create($request->all());
        $product->sizes()->attach($request->sizes);
        $image = $request->file('picture');

        if (!empty($request->picture)) {
            // $request->file('picture')->store('images');
            $link = $request->store('images');
            $image = substr($link, strrpos($link, '/') + 1);

            $product->picture()->create([
                'link' => $image,
                'title' => $request->title_image ?? 'Default'
            ]);
        }

        return redirect()->route('product.index')->with('message', 'Produit crée avec succés');
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
    public function edit($id)
    {
        //

        $product = Product::find($id);
        $sizes = Size::all();
        $Productcategories = Category::orderBy('name')->get();


        $checkSizes = [];

        foreach ($product->$sizes as $size) {
            $checkSizes[] = $size->id;
        }



        return view('back.product.edit', compact('product', 'checkSizes', 'sizes', '$Productcategories'));
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //

        $oldImage = $product->picture->link;

        $product->update($request->all());
        $product->sizes()->sync($request->sizes);

        $product->picture()->update(['title' => $request->title_image]);

        if (!empty($request->picture)) {
            $link = $request->picture->store('images');
            $image = substr($link, strrpos($link, '/') + 1);

            Storage::delete('images/' . $oldImage);

            $product->picture()->update([
                'link' => $image,

            ]);
        }


        return redirect()->route('product.index')->with('message', 'Modification reussi avec succés');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // Suprression d'un produit

        if ($product->picture) {
            Storage::disk('local')->delete($product->picture->link);
        }
        $product->delete();

        return redirect()->back()->with('message', 'suppression reussi avec succés');
    }
}
