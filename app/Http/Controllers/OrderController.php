<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index()
    {
        $data = Storage::get('files/orders.txt');
        $data = explode("\n", str_replace("\r", "", $data));
        $newData = [];
        foreach ($data as $elem) {
            if (empty($elem)) continue;
            $elem = explode("\t", $elem);
            $newData[] = ["name" => $elem[0], 'phone' => $elem[1], 'email' => $elem[2], 'info' => $elem[3]];
        }
        return view('orders.index', ["orders" => $newData]);
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        Storage::append('files/orders.txt', $data["name"] . "\t" . $data["phone"] . "\t" . $data["email"] . "\t" . $data["info"]);
        return redirect('/orders');
    }
}
