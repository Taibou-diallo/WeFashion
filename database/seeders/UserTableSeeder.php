<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // insertion d'un utilisateur
        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.fr',
        //     'password' => Hash::make('admin'),
        //     // crypte le mot de passe,
        // ]);
    }
}
