<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
require __DIR__.'/nhacungcap.php';
require __DIR__.'/loaihang.php';
