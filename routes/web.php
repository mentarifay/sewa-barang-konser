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
Route::get('/powerbank', function () {
    return view('powerbank.index');
});

// Detail produk powerbank anker
Route::get('/powerbank/detail1', function () {
    return view('powerbank.detail1');
});

// Detail produk powerbank xiaomi
Route::get('/powerbank/detail2', function () {
    return view('powerbank.detail2');
});

// Halaman utama handphone
Route::get('/handphone', function () {
    return view('handphone.index');
});

// Detail Samsung Galaxy S21
Route::get('/handphone/detail1', function () {
    return view('handphone.detail1');
});

// Detail iPhone 13 Pro
Route::get('/handphone/detail2', function () {
    return view('handphone.detail2');
});


// Halaman utama lightstick
Route::get('/lightsticks', function () {
    return view('lightsticks.index');
});

// Detail produk lightstick seventeen
Route::get('/lightstick/detail1', function () {
    return view('lightstick.detail1');
});

// Detail produk lightstick BTS
Route::get('/lightstick/detail2', function () {
    return view('lightstick.detail2');
});

