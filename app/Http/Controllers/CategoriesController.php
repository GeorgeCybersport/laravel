<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view("categories.index", ['categories'=>$this->newsList]);
    }

    public function single(string $id)
    {
        return view("categories.single", ['categories'=>$this->newsList, 'id'=>$id]);
    }
}
