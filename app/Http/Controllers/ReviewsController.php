<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewsController extends Controller
{
    public function index()
    {
        $data = Storage::get('files/reviews.txt');
        $data = explode("\n", str_replace("\r", "", $data));
        $newData = [];
        foreach ($data as $elem) {
            if(empty($elem)) continue;
            $elem = explode("\t", $elem);
            $newData[] = ["name" => $elem[0], 'comment' => $elem[1]];
        }
        return view('reviews.index', ["reviews" => $newData]);
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        Storage::append('files/reviews.txt', $data["name"] . "\t" . $data["comment"]);
        return redirect('/reviews');
    }
}
