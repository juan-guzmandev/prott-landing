<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landin');
});

// Route::get('/landin', function () {
//     return view('landin');
// });