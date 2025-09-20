<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;

// Tampilkan form
Route::get('/create-account', [RegisterController::class, 'showCreateForm'])->name('create.account');

// Tangani form POST
Route::post('/create-account', [RegisterController::class, 'storeAccount'])->name('create.account.store');

// Halaman utama
Route::view('/', 'welcome')->name('home');

// Dropdown kategori (controller → products/*.blade.php)
Route::get('/products/lightstick', [ProductController::class, 'showLightstick'])->name('products.lightstick');
Route::get('/products/powerbank',  [ProductController::class, 'showPowerbank'])->name('products.powerbank');
Route::get('/products/handphone',  [ProductController::class, 'showHandphone'])->name('products.handphone');

// Halaman "Tentang Kami" & umum
Route::view('/tentang-kami', 'tentang-kami')->name('tentangKami');
Route::view('/sign-in', 'sign-in')->name('signIn');
Route::view('/create-account', 'create-account')->name('createAccount');
Route::view('/terms-and-conditions', 'terms-and-conditions')->name('termsAndConditions');
Route::view('/shop', 'shop-page')->name('shop');
Route::view('/hubungi-kami', 'hubungi')->name('hubungi');

// Halaman kategori list/detail
// Lightstick
Route::view('/lightstick', 'lightstick.index')->name('lightstick.index');
Route::view('/lightstick/{id}', 'lightstick.detail')->name('lightstick.detail');

// Powerbank
Route::view('/powerbank', 'powerbank.index')->name('powerbank.index');
Route::view('/powerbank/{id}', 'powerbank.detail')->name('powerbank.detail');

// Handphone
Route::view('/handphone', 'handphone.index')->name('handphone.index');
Route::view('/handphone/{id}', 'handphone.detail')->name('handphone.detail');
