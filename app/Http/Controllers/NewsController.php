<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;
use App\Http\Requests\NewsRequest;

class NewsController extends Controller
{
    public function index()
    {
        $news = new News();
        $news = $news->all();
        return view('news.index', ['news' => $news]);
    }

    public function single(int $id)
    {
        $news = new News();
        $news = $news->find($id);
        if (empty($news)){
            abort(404);
        }
        return view("news.single", ['news' => $news]);
    }

    public function create()
    {
        $categories = Categories::all();
        return view("news.create", ["categories"=>$categories]);
    }
    public function store(NewsRequest $request)
    {

        $data = $request->toArray();
        if (empty(Categories::find($data['category_id']))){
            abort(500);
        }
        if (News::create($data))
            return redirect('/news');
        else abort(500);
    }
    public function edit(int $id)
    {
        $news = News::find($id);
        if (empty($news)){
            abort(404);
        }
        return view('news.edit', ["news"=>$news, "categories"=>Categories::all()]);
    }
    public function update(NewsRequest $request, int $id)
    {
        $news = News::find($id);
        if (empty($news)){
            abort(404);
        }
        $data = $request->toArray();
        if (empty(Categories::find($data['category_id']))){
            abort(500);
        }
        $news->category_id = $data['category_id'];
        $news->title = $data['title'];
        $news->content = $data['content'];
        $news->save();
        return redirect()->route('news.single', $id);
    }
    public function delete(int $id)
    {
        News::find($id)->delete();
        return redirect('/news');
    }
}
