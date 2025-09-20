<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk - Lightstick</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Container -->
  <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">

    <!-- Gambar & Detail Produk -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <!-- Gambar besar -->
      <div>
        <img src="https://i.pinimg.com/1200x/91/fb/ef/91fbef7939b5e77d2d4ba230e6b58d92.jpg" 
             alt="Lightstick SEVENTEEN"
             class="w-full h-auto rounded-lg shadow-lg">
      </div>

      <!-- Detail -->
      <div>
        <h1 class="text-3xl font-bold text-gray-900 mb-4">Lightstick BTS</h1>
        <p class="text-gray-600 mb-6">
          Kondisi sangat baik, LED terang dan awet. Cocok untuk dipakai saat konser, fan meeting, 
          atau sekadar koleksi. Barang sudah dicek sebelum disewakan.
        </p>
        <p class="text-2xl font-bold text-blue-600 mb-6">Rp 50.000 / hari</p>

        <!-- Tombol sewa -->
        <a href="/pembayaran" 
           class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700">
           Sewa Sekarang
        </a>
      </div>
    </div>

    <!-- Ulasan -->
    <div class="mt-16">
      <h2 class="text-2xl font-bold text-gray-900 mb-6">Ulasan Pelanggan</h2>
      <div class="space-y-6">
        <!-- Review 1 -->
        <div class="bg-white p-6 rounded-lg shadow">
          <p class="font-semibold text-gray-800">⭐ 5/5 - Aulia</p>
          <p class="text-gray-600 mt-2">Lightsticknya bagus banget, nyala terang. Pas dipakai di konser jadi makin seru!</p>
        </div>
        <!-- Review 2 -->
        <div class="bg-white p-6 rounded-lg shadow">
          <p class="font-semibold text-gray-800">⭐ 4/5 - Rizky</p>
          <p class="text-gray-600 mt-2">Kondisi oke, cuma baterainya agak cepat habis. Tapi overall puas.</p>
        </div>
      </div>
    </div>

    <!-- Referensi Barang Lain -->
    <div class="mt-16">
      <h2 class="text-2xl font-bold text-gray-900 mb-6">Orang juga menyewa</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Referensi 1 -->
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <img src="https://i.pinimg.com/736x/d1/17/5f/d1175f6b352b7c2cb8e3dc48fa94bc63.jpg" 
               alt="Powerbank"
               class="w-full h-48 object-cover rounded">
          <h3 class="mt-4 font-semibold text-gray-900">Powerbank 20.000mAh</h3>
          <p class="text-blue-600 font-bold">Rp 25.000 / hari</p>
        </div>

        <!-- Referensi 2 -->
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <img src="https://i.pinimg.com/736x/6a/b9/53/6ab953c26a32f3e1457b21a2cdb08f74.jpg" 
               alt="Kipas Portable"
               class="w-full h-48 object-cover rounded">
          <h3 class="mt-4 font-semibold text-gray-900">Kipas Portable</h3>
          <p class="text-blue-600 font-bold">Rp 15.000 / hari</p>
        </div>

      </div>
    </div>

  </div>
</body>
</html>
