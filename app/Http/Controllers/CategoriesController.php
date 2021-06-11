<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view("categories.index", ['categories'=>$categories]);
    }

    public function single(int $id)
    {
        $category = Categories::find($id);
        if (empty($category)){
            abort(404);
        }
        $news = News::where('category_id', $id)->get();
        //dd($news);
        return view("categories.single", ['category'=>$category, 'news'=>$news]);
    }
}
