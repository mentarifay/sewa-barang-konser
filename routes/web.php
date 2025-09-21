<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;

// Tampilkan form
Route::get('/create-account', [RegisterController::class, 'showCreateForm'])->name('create-account');

// Tangani form POST
Route::post('/create-account', [RegisterController::class, 'storeAccount'])->name('create.account.store');

// Halaman utama
Route::view('/', 'welcome')->name('home');

// Dropdown kategori (controller → products/*.blade.php)
Route::get('/products/lightsticks', [App\Http\Controllers\ProductController::class, 'showLightstick'])->name('products.lightsticks');
Route::get('/products/powerbanks',  [App\Http\Controllers\ProductController::class, 'showPowerbank'])->name('products.powerbanks');
Route::get('/products/handphones',  [App\Http\Controllers\ProductController::class, 'showHandphone'])->name('products.handphones');

// Halaman "Tentang Kami" & umum
Route::view('/tentang-kami', 'tentang-kami')->name('tentangKami');
Route::view('/sign-in', 'sign-in')->name('signIn');
Route::view('/create-account', 'create-account')->name('createAccount');
Route::view('/terms-and-conditions', 'terms-and-conditions')->name('termsAndConditions');
Route::view('/shop', 'shop-page')->name('shop');
Route::view('/hubungi-kami', 'hubungi')->name('hubungi');

// Halaman kategori list/detail
Route::get('/powerbank', function () { return view('powerbank.index'); });
Route::get('/powerbank/detail1', function () { return view('powerbank.detail1'); });
Route::get('/powerbank/detail2', function () { return view('powerbank.detail2'); });

// Handphone
Route::get('/handphone', function () { return view('handphone.index'); });
Route::get('/handphone/detail1', function () { return view('handphone.detail1'); });
Route::get('/handphone/detail2', function () { return view('handphone.detail2'); });

// Lightstick
Route::get('/lightstick', function () { return view('lightstick.index'); });
Route::get('/lightstick/detail1', function () { return view('lightstick.detail1'); });
Route::get('/lightstick/detail2', function () { return view('lightstick.detail2'); });

// Halaman Checkout
Route::get('/checkout', function () {
    return view('checkout.index');
})->name('checkout');

// Rute untuk halaman Pembayaran
Route::get('/pembayaran', function () {
    return view('pembayaran.index');
})->name('payment');

// Rute untuk halaman Konfirmasi Pembayaran
Route::get('/payment/confirmation', function () {
    return view('pembayaran.confirmation');
})->name('payment.confirmation');

// Rute untuk menerima konfirmasi pembayaran (POST method)
Route::post('/payment/status', function (Request $request) {
    // Simpan bukti pembayaran dan pilih bank
    $bank = $request->input('bank');
    $buktiTransfer = $request->file('bukti_transfer');

    // Proses atau simpan bukti transfer di server, atau lakukan verifikasi pembayaran

    // Setelah memproses pembayaran, arahkan ke halaman status pembayaran
    return view('pembayaran.status', ['status' => 'waiting']); // Ganti 'waiting' sesuai dengan status pembayaran
})->name('payment.status');
