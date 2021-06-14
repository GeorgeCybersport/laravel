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
    public function create()
    {
        return view("categories.create");
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'max:255']
        ]);
        if (Categories::insert($data))
            return redirect()->route('categories');
        else abort(500);
    }
    public function edit(int $id)
    {
        $category = Categories::find($id);
        if (empty($category)){
            abort(404);
        }
        return view('categories.edit', ["category"=>$category]);
    }
    public function update(Request $request, int $id)
    {
        $category = Categories::find($id);
        if (empty($category)){
            abort(404);
        }
        $data = $request->validate([
            'name' => ['required', 'max:255']
        ]);
        $category->name = $data['name'];
        $category->save();
        return redirect()->route('categories.single', $id);
    }
    public function delete(int $id)
    {
        Categories::find($id)->delete();
        return redirect('/categories');
    }
}
