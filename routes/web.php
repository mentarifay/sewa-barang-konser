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
// Halaman utama powerbank
Route::get('/powerbanks', function () {
    return view('powerbanks.index');
});

// Detail produk powerbank anker
Route::get('/powerbanks/detail', function () {
    return view('powerbanks.detail');
});

// Detail produk powerbank xiaomi
Route::get('/powerbanks/detail2', function () {
    return view('powerbanks.detail2');
});

// Halaman utama handphone
Route::get('/handphones', function () {
    return view('handphones.index');
});

// Detail Samsung Galaxy S21
Route::get('/handphones/detail', function () {
    return view('handphones.detail');
});

// Detail iPhone 13 Pro
Route::get('/handphones/detail2', function () {
    return view('handphones.detail2');
});


// Halaman utama lightstick
Route::get('/lightsticks', function () {
    return view('lightsticks.index');
});

// Detail produk lightstick seventeen
Route::get('/lightsticks/detail', function () {
    return view('lightsticks.detail');
});

// Detail produk lightstick BTS
Route::get('/lightsticks/detail2', function () {
    return view('lightsticks.detail2');
});

