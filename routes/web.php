<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('welcome'); // Halaman utama
});

// Rute untuk kategori produk
Route::get('/lightstick', [ProductController::class, 'showLightstick'])->name('product.lightstick');
Route::get('/powerbank', [ProductController::class, 'showPowerbank'])->name('product.powerbank');
Route::get('/handphone', [ProductController::class, 'showHandphone'])->name('product.handphone');

// Rute untuk halaman "Tentang Kami"
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentangKami');

// Rute untuk halaman Sign In
Route::get('/sign-in', function () {
    return view('sign-in'); // Pastikan ada view 'sign-in.blade.php'
})->name('signIn');

// Rute untuk halaman Create Account (register)
Route::get('/create-account', function () {
    return view('create-account'); // Pastikan ada view 'create-account.blade.php'
})->name('createAccount');

// Rute untuk halaman Ketentuan dan Kebijakan
Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions'); // Halaman Ketentuan dan Kebijakan
})->name('termsAndConditions');

// Rute untuk halaman Shop (Toko)
Route::get('/shop', function () {
    return view('shop-page'); 
})->name('shop');

// Rute untuk halaman Hubungi Kami
Route::get('/hubungi-kami', function () {
    return view('hubungi'); 
})->name('hubungi');

Route::get('/lightstick/{id}', function ($id) {
    return view('lightstick.detail');
})->name('lightstick.detail');

Route::get('/powerbank/{id}', function ($id) {
    return view('powerbank.detail');
})->name('powerbank.detail');

Route::get('/handphone/{id}', function ($id) {
    return view('handphone.detail');
})->name('handphone.detail');
