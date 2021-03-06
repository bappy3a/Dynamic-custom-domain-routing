<?php

use App\Http\Controllers\HomeController;
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



Route::domain('{subdomain}.'.config('app.short_url'))->group(function () {
    Route::view('/','welcome')->name('domain');
});

Route::get('/', function () {
    return view('index');
});

Auth::routes();
