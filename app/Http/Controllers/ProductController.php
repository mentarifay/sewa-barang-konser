<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // tampilkan daftar produk (untuk customer)
    public function index()
    {
        // daftar produk bisa kamu ambil dari database atau hardcode dulu
        $products = [
            ['name' => 'Lightstick', 'price' => 300000],
            ['name' => 'Powerbank', 'price' => 150000],
            ['name' => 'Handphone', 'price' => 2500000],
            ['name' => 'Kipas Portable', 'price' => 100000],
            ['name' => 'Image Picket', 'price' => 50000],
        ];
        return view('products.index', compact('products'));
    }

    // detail produk by nama
    public function show($product)
    {
        if (view()->exists('products.' . $product)) {
            return view('products.' . $product);
        }

        abort(404);
    }
    
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
