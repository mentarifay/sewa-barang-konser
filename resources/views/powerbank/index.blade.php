<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Powerbank Rental</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Hero Section -->
  <section class="relative bg-gray-800 text-white h-64">
    <img src="https://i.pinimg.com/736x/5f/cc/fa/5fccfa0ce0b93cda5c9d6de528264b6d.jpg" 
         alt="Powerbank"
         class="absolute inset-0 w-full h-full object-cover opacity-40">
    <div class="relative container mx-auto text-center h-full flex flex-col justify-center items-center">
      <h1 class="text-5xl font-extrabold mb-6">Powerbank Rental</h1>
      <p class="max-w-xl mx-auto text-lg text-gray-200 mb-8">
        Sewa powerbank untuk tetap terhubung sepanjang hari!
      </p>
    </div>
  </section>

  <!-- Product List -->
  <div class="bg-white py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900 mb-6">Powerbank Collection</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        
        <!-- Product 1 -->
        <div class="group relative bg-gray-50 p-4 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
          <img src="https://i.pinimg.com/1200x/8c/3c/dd/8c3cdd3c412201c3332d1587db32173a.jpg" 
               alt="Powerbank Anker 20000mAh" 
               class="aspect-square w-full rounded-md object-cover group-hover:opacity-90 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between items-start">
            <div>
              <h3 class="text-lg font-semibold text-gray-900">
                Powerbank Anker 20000mAh
              </h3>
              <p class="mt-1 text-sm text-gray-500">Fast charging, 2 port USB</p>
            </div>
            <p class="text-md font-bold text-blue-600">Rp 25.000 / hari</p>
          </div>
          <a href="/powerbank/detail1"
             class="mt-4 inline-block w-full text-center bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-700">
             Lihat Detail
          </a>
        </div>

        <!-- Product 2 -->
        <div class="group relative bg-gray-50 p-4 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
          <img src="https://i.pinimg.com/736x/1d/65/37/1d6537240af4c904733cd97428d873a0.jpg" 
               alt="Xiaomi Powerbank 10000mAh" 
               class="aspect-square w-full rounded-md object-cover group-hover:opacity-90 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between items-start">
            <div>
              <h3 class="text-lg font-semibold text-gray-900">
                Xiaomi Powerbank 10000mAh
              </h3>
              <p class="mt-1 text-sm text-gray-500">Compact, cocok untuk traveling</p>
            </div>
            <p class="text-md font-bold text-blue-600">Rp 20.000 / hari</p>
          </div>
          <a href="/powerbank/detail2"
             class="mt-4 inline-block w-full text-center bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-700">
             Lihat Detail
          </a>
        </div>

        <!-- Tambah produk lain di sini -->
      </div>
    </div>
  </div>

</body>
</html>
