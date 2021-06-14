<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewsController extends Controller
{
    public function index()
    {
        $data = Review::all();
        return view('reviews.index', ["reviews" => $data]);
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'max:50', "min:2"],
            'comment' => ['max:255', "required"]
        ]);
        if (Review::insert($data))
            return redirect('/reviews');
        else abort(500);
    }
}
