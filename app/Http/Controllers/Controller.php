<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $newsList = [
        "category1" => [
            1 => "News 1",
            2 => "News 2",
            3 => "News 3",
            4 => "News 4",
        ],
        "category2" => [
            5 => "News 5",
            6 => "News 6",
            7 => "News 7",
            8 => "News 8",
        ],
        "category3" => [
            9 => "News 9",
            10 => "News 10",
            11 => "News 11",
            12 => "News 12",
        ],
        "category4" => [
            13 => "News 13",
            14 => "News 14",
            15 => "News 15",
            16 => "News 16",
        ],
        "category5" => [
            17 => "News 17",
            18 => "News 18",
            19 => "News 19",
            20 => "News 20",
        ]

    ];

}
