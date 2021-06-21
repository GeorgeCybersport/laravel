<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index()
    {
        $data = Order::all();
        return view('orders.index', ["orders" => $data]);
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => ['required', 'max:50', "min:2"],
            'phone' => ['required', "numeric"],
            'email' => ['required', 'max:50', "min:5"],
            'info' => ['max:255']
        ]);
        if (Order::insert($data))
            return redirect('/orders');
        else abort(500);
    }
}
