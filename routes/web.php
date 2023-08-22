<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/crud', function () {
    return view('crud',);
});


Route::get('/readyup', function () {
    $data_objects = [
        [
            "gambar" => "img/vga1.png",
            "id_object" => "8234",
            "nama" => "Vga",
            "harga" => "399$"
        ],
        [
            "gambar" => "img/ram.png",
            "id_object" => "2470",
            "nama" => "Ram",
            "harga" => "89$"
        ],
        [
            "gambar" => "img/mobo.png",
            "id_object" => "7934",
            "nama" => "Mobo",
            "harga" => "189$"
        ]
    ];
    return view('readyup', [
        "objects" =>  $data_objects
    ]);
});



Route::get('/search', function () {
    return view('search');
});
