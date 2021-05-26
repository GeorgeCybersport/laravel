<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', ['news' => $this->newsList]);
    }

    public function single(int $id)
    {
        return view("news.single", ['news' => $this->newsList, 'id'=>$id]);
    }

    public function create()
    {
        return view("news.create");
    }
}
