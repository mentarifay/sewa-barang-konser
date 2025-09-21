<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Powerbank Anker 20000mAh</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="max-w-5xl mx-auto py-12 px-6 lg:px-8">

    <!-- PRODUK -->
    <div class="bg-white p-8 rounded-xl shadow-lg">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Gambar -->
        <div>
          <img src="https://i.pinimg.com/1200x/8c/3c/dd/8c3cdd3c412201c3332d1587db32173a.jpg" 
               alt="Powerbank Anker 20000mAh"
               class="w-full h-auto rounded-lg shadow-md">
        </div>

        <!-- Detail -->
        <div>
          <h1 class="text-3xl font-bold text-gray-900 mb-4">Powerbank Anker 20000mAh</h1>
          <p class="text-gray-600 mb-6">
            Kapasitas besar 20000mAh, cocok untuk perjalanan jauh. Kondisi sangat baik, fast charging support.
          </p>
          <p class="text-2xl font-bold text-blue-600 mb-6">Rp 25.000 / hari</p>
         <a href="{{ route('checkout') }}" 
               class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700">
               Sewa Sekarang
          </a>
        </div>
      </div>

      <!-- Ulasan -->
      <div class="mt-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Ulasan Pelanggan</h2>
        <div class="space-y-6">
          <div class="bg-gray-50 p-6 rounded-lg shadow">
            <p class="font-semibold text-gray-800">⭐ 5/5 - Tania</p>
            <p class="text-gray-600 mt-2">Baterai awet banget, bisa ngecas HP berkali-kali. Mantap!</p>
          </div>
          <div class="bg-gray-50 p-6 rounded-lg shadow">
            <p class="font-semibold text-gray-800">⭐ 4/5 - Budi</p>
            <p class="text-gray-600 mt-2">Beratnya lumayan, tapi kapasitasnya besar banget. Worth it!</p>
          </div>
        </div>
      </div>

      <!-- Referensi -->
      <div class="mt-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Orang juga menyewa</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <img src="https://i.pinimg.com/1200x/1d/65/37/1d6537240af4c904733cd97428d873a0.jpg" 
                 alt="Powerbank Xiaomi 10000mAh"
                 class="w-full h-48 object-cover rounded">
            <h3 class="mt-4 font-semibold text-gray-900">Powerbank Xiaomi 10000mAh</h3>
            <p class="text-blue-600 font-bold">Rp 20.000 / hari</p>
          </div>
          <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <img src="https://i.pinimg.com/736x/94/a3/27/94a32767e7a5d3889e4c6257101108d6.jpg" 
                 alt="Samsung Galaxy S21"
                 class="w-full h-48 object-cover rounded">
            <h3 class="mt-4 font-semibold text-gray-900">Samsung Galaxy S21</h3>
            <p class="text-blue-600 font-bold">Rp 80.000 / hari</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
