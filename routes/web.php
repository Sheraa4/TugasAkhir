<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HalamanController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HalamanController::class, 'home'])-> name('home');
Route::get('/about', [HalamanController::class, 'about'])-> name('about');
Route::get('tops', [HalamanController::class, 'tops'])-> name('tops');
// tops
Route::get('tops1', [HalamanController::class, 'detail_tops1'])-> name('detail_tops1');
Route::get('tops2', [HalamanController::class, 'detail_tops2'])-> name('detail_tops2');
Route::get('tops3', [HalamanController::class, 'detail_tops3'])-> name('detail_tops3');
Route::get('tops4', [HalamanController::class, 'detail_tops4'])-> name('detail_tops4');
// bottoms
Route::get('bottoms1', [HalamanController::class, 'detail_bottom1'])-> name('detail_bottom1');
Route::get('bottoms2', [HalamanController::class, 'detail_bottom2'])-> name('detail_bottom2');
Route::get('bottoms3', [HalamanController::class, 'detail_bottom3'])-> name('detail_bottom3');
Route::get('bottoms4', [HalamanController::class, 'detail_bottom4'])-> name('detail_bottom4');
// outwear
Route::get('outwear1', [HalamanController::class, 'detail_outwear1'])-> name('detail_outwear1');
Route::get('outwear2', [HalamanController::class, 'detail_outwear2'])-> name('detail_outwear2');
Route::get('outwear3', [HalamanController::class, 'detail_outwear3'])-> name('detail_outwear3');
Route::get('outwear4', [HalamanController::class, 'detail_outwear4'])-> name('detail_outwear4');
// dresses
Route::get('dresses1', [HalamanController::class, 'detail_dresses1'])-> name('detail_dresses1');
Route::get('dresses2', [HalamanController::class, 'detail_dresses2'])-> name('detail_dresses2');
Route::get('dresses3', [HalamanController::class, 'detail_dresses3'])-> name('detail_dresses3');
Route::get('dresses4', [HalamanController::class, 'detail_dresses4'])-> name('detail_dresses4');
// shoes
Route::get('shoes1', [HalamanController::class, 'detail_shoes1'])-> name('detail_shoes1');
Route::get('shoes2', [HalamanController::class, 'detail_shoes2'])-> name('detail_shoes2');
Route::get('shoes3', [HalamanController::class, 'detail_shoes3'])-> name('detail_shoes3');
Route::get('shoes4', [HalamanController::class, 'detail_shoes4'])-> name('detail_shoes4');
// wedding
Route::get('wedding1', [HalamanController::class, 'detail_dresswd1'])-> name('detail_dresswd1');
Route::get('wedding2', [HalamanController::class, 'detail_dresswd2'])-> name('detail_dresswd2');
Route::get('wedding3', [HalamanController::class, 'detail_dresswd3'])-> name('detail_dresswd3');
Route::get('wedding4', [HalamanController::class, 'detail_dresswd4'])-> name('detail_dresswd4');


Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/card', [ProductController::class, 'card'])->name('products.card');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
// side bar
Route::get('user', [HalamanController::class, 'user'])-> name('user');