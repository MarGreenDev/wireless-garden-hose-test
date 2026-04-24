<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'name' => 'Wireless Garden Hose',
        'price' => '€99'
    ]);
});

Route::get('order' , function () {
    return view('order', [
    'thanks' => 'THANK YOU'
    ]);
});
