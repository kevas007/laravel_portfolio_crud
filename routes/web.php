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
    return view('frontend.welcome');
});

Route::get('/inner-page', function () {
    return view('frontend.pages.inner-page');
});

Route::get('/portfolio-details', function () {
    return view('frontend.pages.portfolioDetails');
});
