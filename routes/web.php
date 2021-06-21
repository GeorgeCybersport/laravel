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
    return redirect()->route('home');
})->name("start");
Route::get('/hello', [HelloController::class, "index"])
    ->name("hello");

Route::get("/news", [NewsController::class, "index"])
    ->name('news');
Route::get("/news/{id}", [NewsController::class, "single"])
    ->where('id', '\d+')
    ->name('news.single');
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get("/news/create", [NewsController::class, "create"])
        ->name('news.create');
    Route::post("/news/store", [NewsController::class, "store"])
        ->name('news.store');
    Route::get("/news/{id}/edit", [NewsController::class, "edit"])
        ->name('news.edit');
    Route::put("/news/{id}/update", [NewsController::class, "update"])
        ->name('news.update');
    Route::delete("/news/{id}/delete", [NewsController::class, "delete"])
        ->where('id', '\d+')
        ->name('news.delete');
});

Route::middleware(['auth', 'isAdmin'])->group(function (){
    Route::get("/categories/create", [CategoriesController::class, "create"])
        ->name('categories.create');
    Route::post("/categories/store", [CategoriesController::class, "store"])
        ->name('categories.store');
    Route::get("/categories/{id}/edit", [CategoriesController::class, "edit"])
        ->name('categories.edit');
    Route::put("/categories/{id}/update", [CategoriesController::class, "update"])
        ->name('categories.update');
    Route::delete("/categories/{id}/delete", [CategoriesController::class, "delete"])
        ->name('categories.delete');
});
Route::get("/categories", [CategoriesController::class, "index"])
    ->name('categories');
Route::get("/categories/{id}", [CategoriesController::class, "single"])
    ->where('id', '\d+')
    ->name('categories.single');

Route::get('/feedback', [\App\Http\Controllers\FeedbackController::class, "index"])->name('feedback');

Route::get('/auth/vk', [\App\Http\Controllers\LoginController::class, 'loginVK'])->name('vkLogin');

Route::get('/auth/vk/response', [\App\Http\Controllers\LoginController::class, 'responseVK'])->name('vkResponse');

Route::middleware(['auth', 'isAdmin'])->prefix('/admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.users.index');
    })->name('index');


    Route::resource('users', \App\Http\Controllers\admin\UsersController::class)
        ->missing(function () {
            return redirect()->route('admin.index');
        });
});


Route::get("/orders", [OrderController::class, "index"])->name("orders");
Route::get("/orders/create", [OrderController::class, "create"])->name("orders.create");
Route::post("/orders/store", [OrderController::class, "store"])->name("orders.store");

Route::get("/reviews", [ReviewsController::class, "index"])->name("reviews");
Route::get("/reviews/create", [ReviewsController::class, "create"])->name("reviews.create");
Route::post("/reviews/store", [ReviewsController::class, "store"])->name("reviews.store");

Auth::routes();

Route::get('/home', function (){
    return view('home');
})->name('home');
