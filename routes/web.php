<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// })->name("acceuil");

// route de la page d'acceuil
Route::get('/', [FrontController::class, 'index'])->name('acceuil');

// route page de soldes
Route::get('sale', [FrontController::class, 'sale'])->name("sale");

// route de la page homme
Route::get('man', [FrontController::class, 'man'])->name("man");

// route de la page femme
Route::get('woman', [FrontController::class, 'woman'])->name("woman");

// route de la page produit
Route::get('product/{id}', [FrontController::class, 'show'])->where(['id' => '[0-9]+'])->name('product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// route pour l affichage
Route::resource('back/product', ProductController::class)->middleware('auth');

Route::get('/admin', [ProductController::class, 'admin'])->middleware('auth');

// Route::get('product/category', [ProductController::class, 'category'])->middleware('auth');

// la methode Create pour la creation des etudaints
Route::get('product/create', [ProductController::class, 'create'])->name("create");

// methode post de create qui va permettre d'envoyer les donnees dans la base
Route::post('product/create', [ProductController::class, 'store'])->name("create.product");

Route::resource('back/category', CategoryController::class)->middleware('auth');


require __DIR__ . '/auth.php';
