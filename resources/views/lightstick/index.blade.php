<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lightstick Products</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Hero Section -->
  <section class="relative bg-gray-800 text-white h-64">
    <img src="https://i.pinimg.com/736x/25/75/0c/25750c5e579f700b2c013409855fc05d.jpg" 
         alt="Lightstick"
         class="absolute inset-0 w-full h-full object-cover opacity-40">
    <div class="relative container mx-auto text-center h-full flex flex-col justify-center items-center">
      <h1 class="text-5xl font-extrabold mb-6">Lightstick Products</h1>
      <p class="max-w-xl mx-auto text-lg text-gray-200 mb-8">
        Pilih lightstick fandom Anda untuk disewa selama konser!
      </p>
    </div>
  </section>

  <!-- Product List -->
  <div class="bg-white py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900 mb-6">Lightstick Collection</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        
        <!-- Product 1 -->
        <div class="group relative bg-gray-50 p-4 rounded-lg shadow hover:shadow-lg transition">
          <img src="https://i.pinimg.com/1200x/91/fb/ef/91fbef7939b5e77d2d4ba230e6b58d92.jpg" 
               alt="Lightstick SEVENTEEN" 
               class="aspect-square w-full rounded-md object-cover group-hover:opacity-90 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between items-start">
            <div>
              <h3 class="text-lg font-semibold text-gray-900">
                Lightstick SEVENTEEN
              </h3>
              <p class="mt-1 text-sm text-gray-500">Kondisi sangat baik, LED terang</p>
            </div>
            <p class="text-md font-bold text-blue-600">Rp 50.000 / hari</p>
          </div>
          <a href="/lightstick/detail1"
             class="mt-4 inline-block w-full text-center bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-700">
             Lihat Detail
          </a>
        </div>

        <!-- Product 2 -->
        <div class="group relative bg-gray-50 p-4 rounded-lg shadow hover:shadow-lg transition">
          <img src="https://i.pinimg.com/736x/4c/df/48/4cdf480bc982545df8282debf7e9e2d8.jpg" 
               alt="Lightstick BTS" 
               class="aspect-square w-full rounded-md object-cover group-hover:opacity-90 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between items-start">
            <div>
              <h3 class="text-lg font-semibold text-gray-900">
                Lightstick BTS
              </h3>
              <p class="mt-1 text-sm text-gray-500">Nyala RGB, cocok untuk konser</p>
            </div>
            <p class="text-md font-bold text-blue-600">Rp 60.000 / hari</p>
          </div>
          <a href="/lightstick/detail2"
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
