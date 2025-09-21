<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Lightstick BTS</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="max-w-5xl mx-auto py-12 px-6 lg:px-8">

    <!-- PRODUK -->
    <div class="bg-white p-8 rounded-xl shadow-lg">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Gambar -->
        <div>
          <img src="https://i.pinimg.com/736x/aa/32/68/aa3268c1a2e0c97b80787932ad4b01a4.jpg" 
               alt="Lightstick BTS"
               class="w-full h-auto rounded-lg shadow-md">
        </div>

        <!-- Detail -->
        <div>
          <h1 class="text-3xl font-bold text-gray-900 mb-4">Lightstick BTS</h1>
          <p class="text-gray-600 mb-6">
            Nyala RGB dengan berbagai mode, cocok untuk konser dan acara komunitas ARMY.
          </p>
          <p class="text-2xl font-bold text-blue-600 mb-6">Rp 60.000 / hari</p>
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
            <p class="font-semibold text-gray-800">⭐ 5/5 - Rani</p>
            <p class="text-gray-600 mt-2">Lightsticknya super terang, vibe konser makin kerasa!</p>
          </div>
          <div class="bg-gray-50 p-6 rounded-lg shadow">
            <p class="font-semibold text-gray-800">⭐ 4/5 - Dimas</p>
            <p class="text-gray-600 mt-2">Barang mantap, cuma agak berat dipakai lama. Tapi worth it!</p>
          </div>
        </div>
      </div>

      <!-- Referensi -->
      <div class="mt-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Orang juga menyewa</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <img src="https://i.pinimg.com/736x/dd/d9/dd/ddd9dd06720dc22f9fecb1cdb997b4d9.jpg" 
                 alt="Lightstick SEVENTEEN"
                 class="w-full h-48 object-cover rounded">
            <h3 class="mt-4 font-semibold text-gray-900">Lightstick SEVENTEEN</h3>
            <p class="text-blue-600 font-bold">Rp 50.000 / hari</p>
          </div>
          <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
            <img src="https://i.pinimg.com/736x/94/a3/27/94a32767e7a5d3889e4c6257101108d6.jpg" 
                 alt="Samsung Galaxy s21"
                 class="w-full h-48 object-cover rounded">
            <h3 class="mt-4 font-semibold text-gray-900">Samsung Galaxy s21</h3>
            <p class="text-blue-600 font-bold">Rp 110.000 / hari</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
