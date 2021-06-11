<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\CategoriesController;
use \App\Http\Controllers\OrderController;
use \App\Http\Controllers\ReviewsController;

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

Route::get('/', function () {
    return view('welcome');
})->name("start");
Route::get('/hello', [HelloController::class, "index"])
    ->name("hello");

Route::get("/news", [NewsController::class, "index"])
    ->name('news');
Route::get("/news/{id}", [NewsController::class, "single"])
    ->where('id', '\d+')
    ->name('news.single');
Route::get("/news/create", [NewsController::class, "create"])
    ->name('news.create');

Route::get("/categories", [CategoriesController::class, "index"])
    ->name('categories');
Route::get("/categories/{id}", [CategoriesController::class, "single"])
    ->name('categories.single');

Route::get("/orders", [OrderController::class, "index"])->name("orders");
Route::get("/orders/create", [OrderController::class, "create"])->name("orders.create");
Route::post("/orders/store", [OrderController::class, "store"])->name("orders.store");

Route::get("/reviews", [ReviewsController::class, "index"])->name("reviews");
Route::get("/reviews/create", [ReviewsController::class, "create"])->name("reviews.create");
Route::post("/reviews/store", [ReviewsController::class, "store"])->name("reviews.store");
