<?php

use Illuminate\Support\Facades\Route;

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
});
Route::get('/hello', function () {
    echo "Hello, user";
});
Route::get('/hello/{name}', function (string $name) {
    echo "Hello, ".$name;
});
Route::get('/info', function () {
    echo "Info about project";
});
Route::get('/news', function () {
    echo "news";
});
Route::get('/news/{id}', function (int $id) {
    echo "news with id ".$id;
});
