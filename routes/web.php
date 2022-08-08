<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Product;
use App\Http\Livewire\Cart;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Logout;
use App\Http\Livewire\Nav\Contact;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    // Route::get('/', function () {
    //     return view('welcome');
    // });
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/cart', Cart::class)->name('cart');
    Route::get('/products', Product::class)->name('products');
    Route::get('/contact', Contact::class)->name('contact');
    Route::get('/logout', Logout::class)->name('logout');

});

