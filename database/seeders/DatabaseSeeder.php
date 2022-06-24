<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // création des categories
        Category::factory()->create([
            'name' => 'Homme'
        ]);
        Category::factory()->create([
            'name' => 'Femme'
        ]);


        // creation des tailles
        Size::factory()->create([
            'name' => 'XS'
        ]);
        Size::factory()->create([
            'name' => 'S'
        ]);
        Size::factory()->create([
            'name' => 'M'
        ]);
        Size::factory()->create([
            'name' => 'L'
        ]);
        Size::factory()->create([
            'name' => 'XL'
        ]);

        // appel du seeder 
        $this->call(ProductTableSeeder::class);
    }
}
