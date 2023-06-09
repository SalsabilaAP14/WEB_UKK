<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('index', [
//         "title" => "Beranda"
//     ]);
// });

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/detail/{id}', [UserController::class, 'detail'])->name('detail');


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

//Route::resource('/contacts', ContactController::class);create
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');

Auth::routes();

Route::group(['middleware' => ['auth']], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');
    Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit/', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/contacts{id}/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/contacts{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::get('/export-buku', [ContactController::class, 'export_excel'])->name('export');
});