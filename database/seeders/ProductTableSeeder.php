<?php

namespace Database\Seeders;

use App\Models\Size;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // // création des categories
        // Category::factory()->create([
        //     'name' => 'Homme'
        // ]);
        // Category::factory()->create([
        //     'name' => 'Femme'
        // ]);


        // // creation des tailles
        // Size::factory()->create([
        //     'name' => 'XS'
        // ]);
        // Size::factory()->create([
        //     'name' => 'S'
        // ]);
        // Size::factory()->create([
        //     'name' => 'M'
        // ]);
        // Size::factory()->create([
        //     'name' => 'L'
        // ]);
        // Size::factory()->create([
        //     'name' => 'XL'
        // ]);


        // suprression des images avant les seeders
        Storage::disk('local')->delete(Storage::allFiles());

        //creation de 80 produits
        Product::factory()->count(80)->create()->each(function ($product) {

            $category = Category::find(rand(1, 2));

            // on associe chaque produit a un categorie
            $product->Category()->associate($category);

            // sauvegarde de l'association
            $product->save();

            $folder = $product->category_id == 1 ? 'hommes' : 'femmes';

            // ajout d'image
            $link = Str::random(12) . '.jpg';
            $file = file_get_contents(public_path('image/' . $folder . '/' . rand(1, 10) . '.jpg'));
            Storage::disk('local')->put($link, $file);

            $product->picture()->create([
                'title' => 'Default', // valeur par défaut
                'link' => $link
            ]);


            $sizes = Size::pluck('id')->shuffle()->slice(0, rand(1, 5))->all();

            // Il faut se mettre maintenant en relation avec les auteurs (relation ManyToMany) et attacher les id des auteurs
            // dans la table de liaison.
            $product->sizes()->attach($sizes);
        });
    }
}
