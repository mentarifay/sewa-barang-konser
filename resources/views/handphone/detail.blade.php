<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk Handphone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8 space-y-16">

    <!-- ==================== PRODUK GRID ==================== -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

      <!-- PRODUK 1 -->
      <div class="bg-white p-8 rounded-xl shadow-lg flex flex-col">
        <img src="https://i.pinimg.com/736x/41/4f/c2/414fc289d356ba08a6f0e50b50502f58.jpg" 
             alt="Samsung Galaxy S21"
             class="w-full h-64 object-cover rounded-lg shadow-md mb-6">

        <h1 class="text-2xl font-bold text-gray-900 mb-2">Samsung Galaxy S21</h1>
        <p class="text-gray-600 mb-4 flex-grow">
          Smartphone flagship dengan kamera jernih dan performa kencang. Kondisi sangat baik, baterai awet, layar AMOLED 120Hz.
        </p>
        <p class="text-xl font-bold text-blue-600 mb-4">Rp 80.000 / hari</p>
        <a href="/pembayaran" 
           class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 text-center">
           Sewa Sekarang
        </a>

        <!-- Ulasan -->
        <div class="mt-8">
          <h2 class="text-lg font-bold text-gray-900 mb-4">Ulasan</h2>
          <div class="bg-gray-50 p-4 rounded-lg mb-3">
            <p class="font-semibold">⭐ 5/5 - Dina</p>
            <p class="text-gray-600 text-sm">HP mulus banget, performanya kencang. Cocok buat kerja & foto-foto.</p>
          </div>
          <div class="bg-gray-50 p-4 rounded-lg">
            <p class="font-semibold">⭐ 4/5 - Rafi</p>
            <p class="text-gray-600 text-sm">Bagus, cuma agak berat kalau dipakai lama. Tapi overall oke.</p>
          </div>
        </div>
      </div>

      <!-- PRODUK 2 -->
      <div class="bg-white p-8 rounded-xl shadow-lg flex flex-col">
        <img src="https://i.pinimg.com/736x/44/b1/b9/44b1b9657f1a5d7a0a3cf17eec4a5d70.jpg" 
             alt="iPhone 13 Pro"
             class="w-full h-64 object-cover rounded-lg shadow-md mb-6">

        <h1 class="text-2xl font-bold text-gray-900 mb-2">iPhone 13 Pro</h1>
        <p class="text-gray-600 mb-4 flex-grow">
          Kamera profesional dengan sensor wide & ultra-wide. Kondisi sangat baik, cocok untuk konten kreator & konser.
        </p>
        <p class="text-xl font-bold text-blue-600 mb-4">Rp 100.000 / hari</p>
        <a href="/pembayaran" 
           class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 text-center">
           Sewa Sekarang
        </a>

        <!-- Ulasan -->
        <div class="mt-8">
          <h2 class="text-lg font-bold text-gray-900 mb-4">Ulasan</h2>
          <div class="bg-gray-50 p-4 rounded-lg mb-3">
            <p class="font-semibold">⭐ 5/5 - Sinta</p>
            <p class="text-gray-600 text-sm">Kameranya tajam banget, hasil foto kayak DSLR. Puas banget!</p>
          </div>
          <div class="bg-gray-50 p-4 rounded-lg">
            <p class="font-semibold">⭐ 4/5 - Adi</p>
            <p class="text-gray-600 text-sm">Bagus, cuma agak panas kalau dipakai lama. Tapi performanya luar biasa.</p>
          </div>
        </div>
      </div>

    </div>

    <!-- ==================== REFERENSI ==================== -->
    <div>
      <h2 class="text-2xl font-bold text-gray-900 mb-6">Orang juga menyewa</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Referensi 1 -->
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <img src="https://i.pinimg.com/736x/2d/8f/d1/2d8fd188d84c3e9c5fa7b9bbcb7b26aa.jpg" 
               alt="Powerbank Anker 20000mAh"
               class="w-full h-48 object-cover rounded">
          <h3 class="mt-4 font-semibold text-gray-900">Powerbank Anker 20000mAh</h3>
          <p class="text-blue-600 font-bold">Rp 25.000 / hari</p>
        </div>

        <!-- Referensi 2 -->
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <img src="https://i.pinimg.com/736x/4a/20/11/4a201178f4b5958b6a3b1ec289f0ad8f.jpg" 
               alt="Xiaomi Powerbank 10000mAh"
               class="w-full h-48 object-cover rounded">
          <h3 class="mt-4 font-semibold text-gray-900">Xiaomi Powerbank 10000mAh</h3>
          <p class="text-blue-600 font-bold">Rp 20.000 / hari</p>
        </div>

        <!-- Referensi 3 -->
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <img src="https://i.pinimg.com/736x/f4/64/42/f4644230f5a83578e33f5d2b2731c770.jpg" 
               alt="Samsung Galaxy A52"
               class="w-full h-48 object-cover rounded">
          <h3 class="mt-4 font-semibold text-gray-900">Samsung Galaxy S21</h3>
          <p class="text-blue-600 font-bold">Rp 70.000 / hari</p>
        </div>

      </div>
    </div>

  </div>
</body>
</html>

