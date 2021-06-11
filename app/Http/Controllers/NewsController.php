<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\News;

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
        return view("news.create");
    }
}
