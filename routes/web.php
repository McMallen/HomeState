<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.site');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php


/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
