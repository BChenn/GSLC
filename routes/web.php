<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/chicken', function () {

    $chickenlist = [
        [
            "foodname" => "Roasted Chicken",
            "price" => "Rp 99.000,00"
        ],
        [
            "foodname" => "Chicken Pot Pie",
            "price" => "Rp 85.000,00"
        ],
        [
            "foodname" => "Chicken Soup",
            "price" => "Rp 55.000,00"
        ],
        [
            "foodname" => "Indian Chicken Curry",
            "price" => "Rp 85.000,00"
        ],
        [
            "foodname" => "Chicken Stir-Fry",
            "price" => "Rp 45.000,00"
        ],
        [
            "foodname" => "Chicken Quesadillas",
            "price" => "Rp 75.000,00"
        ],
    ];

    return view('chicken', [
        "title" => "chicken list",
        "chicken" => $chickenlist
    ]);
});

Route::get('/pasta', function () {

    $pastalist = [
        [
            "foodname" => "Fettuccine Alfredo",
            "price" => "Rp 75.000,00"
        ],
        [
            "foodname" => "Macaroni and Cheese",
            "price" => "Rp 65.000,00"
        ],
        [
            "foodname" => "Lasagna",
            "price" => "Rp 90.000,00"
        ],
        [
            "foodname" => "Aglio e Olio",
            "price" => "Rp 75.000,00"
        ],
        [
            "foodname" => "Casserole",
            "price" => "Rp 100.000,00"
        ],
        [
            "foodname" => "Baked Spagetti",
            "price" => "Rp 95.000,00"
        ],
    ];

    return view('pasta', [
        "title" => "pasta list",
        "pasta" => $pastalist
    ]);
});

Route::get('/seafood', function () {

    $seafoodlist = [
        [
            "foodname" => "Maple Salmon",
            "price" => "Rp 95.000,00"
        ],
        [
            "foodname" => "Best Clam Chowder",
            "price" => "Rp 75.000,00"
        ],
        [
            "foodname" => "Pan-Seared Tilapia",
            "price" => "Rp 90.000,00"
        ],
        [
            "foodname" => "Ahi Poke",
            "price" => "Rp 85.000,00"
        ],
        [
            "foodname" => "Fish and Chips",
            "price" => "Rp 70.000,00"
        ],
        [
            "foodname" => "Crab Stuffed Mushrooms",
            "price" => "Rp 95.000,00"
        ],
    ];

    return view('seafood', [
        "title" => "seafood list",
        "seafood" => $seafoodlist
    ]);
});