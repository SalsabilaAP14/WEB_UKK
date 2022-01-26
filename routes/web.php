<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Noviana Retno Pinasti",
        "email" => "novianaretno@gmail.com",
        "gambar" => "fotosaya.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Route::resource('/contacts', ContactController::class);
//Route::resource('/contacts', function () {
  //  return view('contacts', [
    //    "title" => "Contacts"
    //]);
//});