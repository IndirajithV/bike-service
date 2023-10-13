<?php

use App\Http\Controllers\Bikecontrol;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/book2', function () {
    return view('book2');
});

Route::get('/book3', function () {
    return view('book3');
});


Route::get('/order', function () {
    return view('order');
});

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login',[Bikecontrol::class,'login'])->name('login');

Route::post('/register',[Bikecontrol::class,'register'])->name('register');

Route::post('/badass',[Bikecontrol::class,'vijay'])->name('leo');

Route::post('/ghost',[Bikecontrol::class,'kamal'])->name('vikram');

Route::get('/home',[Bikecontrol::class,'home'])->name('home');

Route::get('/dilli',[Bikecontrol::class,'karthi'])->name('kaithi');

Route::get('/brothers',[Bikecontrol::class,'ajith'])->name('veram');

Route::get('/law',[Bikecontrol::class,'surya'])->name('jai');

Route::get('/order',[Bikecontrol::class,'sk'])->name('sk');