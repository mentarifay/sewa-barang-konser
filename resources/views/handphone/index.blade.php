<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Handphone Products</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Hero Section -->
  <section class="relative bg-gray-800 text-white h-64">
    <img src="https://i.pinimg.com/736x/3c/1e/f2/3c1ef2e2a6b73e0c61609b5c6eac6d22.jpg" 
         alt="Handphone"
         class="absolute inset-0 w-full h-full object-cover opacity-40">
    <div class="relative container mx-auto text-center h-full flex flex-col justify-center items-center">
      <h1 class="text-5xl font-extrabold mb-6">Handphone Products</h1>
      <p class="max-w-xl mx-auto text-lg text-gray-200 mb-8">
        Discover our latest collection of smartphones for rent — stay connected anytime.
      </p>
    </div>
  </section>

  <!-- Product List -->
  <div class="bg-white py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900 mb-6">Handphone Collection</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        
        <!-- Product 1 -->
        <div class="group relative bg-gray-50 p-4 rounded-lg shadow hover:shadow-lg transition">
          <img src="https://i.pinimg.com/736x/21/c2/80/21c280e368bc932f84e0c63c5d9f6e3e.jpg" 
               alt="Samsung Galaxy S21" 
               class="aspect-square w-full rounded-md object-cover group-hover:opacity-90 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between items-start">
            <div>
              <h3 class="text-lg font-semibold text-gray-900">
                Samsung Galaxy S21
              </h3>
              <p class="mt-1 text-sm text-gray-500">8GB RAM, 128GB Storage</p>
            </div>
            <p class="text-md font-bold text-blue-600">$50 / day</p>
          </div>
          <a href="/handphone/1"
             class="mt-4 inline-block w-full text-center bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-700">
             Lihat Detail
          </a>
        </div>

        <!-- Product 2 -->
        <div class="group relative bg-gray-50 p-4 rounded-lg shadow hover:shadow-lg transition">
          <img src="https://i.pinimg.com/736x/bf/13/26/bf1326710c146f75dcf8f33f4aa5ad9d.jpg" 
               alt="iPhone 13 Pro" 
               class="aspect-square w-full rounded-md object-cover group-hover:opacity-90 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between items-start">
            <div>
              <h3 class="text-lg font-semibold text-gray-900">
                iPhone 13 Pro
              </h3>
              <p class="mt-1 text-sm text-gray-500">128GB, Super Retina Display</p>
            </div>
            <p class="text-md font-bold text-blue-600">$70 / day</p>
          </div>
          <a href="/handphone/2"
             class="mt-4 inline-block w-full text-center bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-700">
             Lihat Detail
          </a>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
