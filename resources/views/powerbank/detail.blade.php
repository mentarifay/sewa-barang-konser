@extends('layouts.app')

@section('content')
<div class="bg-gray-100 py-12">
  <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-8">
    
    <!-- Gambar Produk -->
    <div>
      <img src="https://i.pinimg.com/736x/b5/8f/52/b58f52b9a0fca9b5e6e292d9fbbbe27e.jpg" 
           alt="Powerbank 20.000 mAh"
           class="w-full h-[400px] object-cover rounded-lg shadow">
    </div>

    <!-- Detail Produk -->
    <div>
      <h1 class="text-3xl font-bold text-gray-900 mb-4">Powerbank 20.000 mAh</h1>
      <p class="text-gray-600 mb-4">
        Kapasitas besar, bisa charge hingga 4 kali. Kondisi bagus.
      </p>
      <p class="text-2xl font-semibold text-blue-600 mb-6">Rp 25.000 / hari</p>

      <a href="/pembayaran" 
         class="bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700">
         Sewa Sekarang
      </a>
    </div>
  </div>

  <!-- Ulasan -->
  <div class="max-w-6xl mx-auto px-4 mt-12">
    <h2 class="text-xl font-bold mb-4">Ulasan Pelanggan</h2>
    <div class="space-y-4">
      <div class="p-4 bg-white rounded shadow">
        <p class="font-semibold">Dika</p>
        <p class="text-gray-600">Awet banget, bisa dipakai seharian konser.</p>
      </div>
    </div>
  </div>

  <!-- Referensi -->
  <div class="max-w-6xl mx-auto px-4 mt-12">
    <h2 class="text-xl font-bold mb-4">Orang juga menyewa</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
      <a href="/lightstick/1" class="block bg-white p-4 rounded shadow hover:shadow-lg">
        <img src="https://i.pinimg.com/1200x/91/fb/ef/91fbef7939b5e77d2d4ba230e6b58d92.jpg" class="h-40 w-full object-cover rounded mb-2">
        <p class="font-semibold text-gray-800">Lightstick SEVENTEEN</p>
      </a>
      <a href="/handphone/1" class="block bg-white p-4 rounded shadow hover:shadow-lg">
        <img src="https://i.pinimg.com/736x/c9/87/94/c987940c127f4238cba36d8f9af1aeb9.jpg" class="h-40 w-full object-cover rounded mb-2">
        <p class="font-semibold text-gray-800">Handphone Samsung A50</p>
      </a>
    </div>
  </div>
</div>
@endsection
