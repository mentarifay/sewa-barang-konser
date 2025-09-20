<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk - Handphone</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Container -->
  <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">

    <!-- Gambar & Detail Produk -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <!-- Gambar besar -->
      <div>
        <img src="https://i.pinimg.com/736x/73/a9/ee/73a9ee88b19f2dcddb55f7e71826da62.jpg" 
             alt="Samsung Galaxy S21"
             class="w-full h-auto rounded-lg shadow-lg">
      </div>

      <!-- Detail -->
      <div>
        <h1 class="text-3xl font-bold text-gray-900 mb-4">Iphone 13 Pro</h1>
        <p class="text-gray-600 mb-6">
          Handphone flagship dengan performa tinggi. 8GB RAM, 128GB Storage, kamera jernih, 
          baterai awet. Cocok untuk kerja, konser, atau kebutuhan konten. Kondisi barang terawat.
        </p>
        <p class="text-2xl font-bold text-blue-600 mb-6">$50 / day</p>

        <!-- Tombol sewa -->
        <a href="/pembayaran" 
           class="inline-block bg-green-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-700">
           Sewa Sekarang
        </a>
      </div>
    </div>

    <!-- Ulasan -->
    <div class="mt-16">
      <h2 class="text-2xl font-bold text-gray-900 mb-6">Ulasan Penyewa</h2>
      <div class="space-y-6">
        <!-- Review 1 -->
        <div class="bg-white p-6 rounded-lg shadow">
          <p class="font-semibold text-gray-800">⭐ 5/5 - Dinda</p>
          <p class="text-gray-600 mt-2">HP-nya mulus banget, baterai awet. Nyaman dipakai seharian.</p>
        </div>
        <!-- Review 2 -->
        <div class="bg-white p-6 rounded-lg shadow">
          <p class="font-semibold text-gray-800">⭐ 4/5 - Fajar</p>
          <p class="text-gray-600 mt-2">Semua fungsi normal, cuma agak berat kalau dipakai main game lama.</p>
        </div>
      </div>
    </div>

    <!-- Referensi Barang Lain -->
    <div class="mt-16">
      <h2 class="text-2xl font-bold text-gray-900 mb-6">Orang juga menyewa</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Referensi 1 -->
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <img src="https://i.pinimg.com/1200x/87/d3/0a/87d30a844086ad9fd3ed2c989d9025c0.jpg" 
               alt="iPhone 13 Pro"
               class="w-full h-48 object-cover rounded">
          <h3 class="mt-4 font-semibold text-gray-900">iPhone 13 Pro</h3>
          <p class="text-blue-600 font-bold">$70 / day</p>
        </div>

        <!-- Referensi 2 -->
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <img src="https://i.pinimg.com/1200x/43/07/3b/43073b3f658161d3664f437b4a80de44.jpg" 
               alt="Powerbank"
               class="w-full h-48 object-cover rounded">
          <h3 class="mt-4 font-semibold text-gray-900">Powerbank 20.000mAh</h3>
          <p class="text-blue-600 font-bold">Rp 25.000 / hari</p>
        </div>

      </div>
    </div>

  </div>
</body>
</html>
