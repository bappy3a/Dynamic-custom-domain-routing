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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::domain('{account}.domain.bappy.pc')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         dd($account);
//     });
// });


Route::domain('app.bappy.bringoit.com')->group(function ($router) {
    dd('hello');
});