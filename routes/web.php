<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'name' => 'Wireless Garden Hose',
        'price' => '€99'
    ]);
});
