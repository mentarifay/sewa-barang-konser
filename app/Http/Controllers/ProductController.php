<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showLightstick()
    {
        // Logika untuk menampilkan produk lightstick
        return view('products.lightstick');
    }

    public function showPowerbank()
    {
        // Logika untuk menampilkan produk powerbank
        return view('products.powerbank');
    }

    public function showImagePicket()
    {
        // Logika untuk menampilkan produk image-picket
        return view('products.image-picket');
    }

    public function showHandphone()
    {
        // Logika untuk menampilkan produk handphone
        return view('products.handphone');
    }

    public function showKipasPortable()
    {
        // Logika untuk menampilkan produk kipas-portable
        return view('products.kipas-portable');
    }
}
