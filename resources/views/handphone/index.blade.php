<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Handphone Products</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Hero Section for Handphone Products -->
  <section class="relative bg-gray-800 text-white h-64">
    <img src="https://i.pinimg.com/736x/9a/bb/28/9abb28aaed951df7b7b6b79428955c79.jpg" 
         alt="Handphone"
         class="absolute inset-0 w-full h-full object-cover opacity-40">
    <div class="relative container mx-auto text-center h-full flex flex-col justify-center items-center">
      <h1 class="text-5xl font-extrabold mb-6">Handphone Products</h1>
      <p class="max-w-xl mx-auto text-lg text-gray-200 mb-8">
        Discover our latest collection of smartphones for rent — stay connected anytime.
      </p>
    </div>
  </section>

  <!-- Product List for Handphone -->
  <div class="bg-white py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Handphone Collection</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        
        <!-- Product 1 -->
        <div class="group relative">
          <img src="https://i.pinimg.com/736x/7e/2f/55/7e2f55abc4c99835ca8c05bd8cef300a.jpg" 
               alt="Handphone 1" 
               class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Samsung Galaxy S21
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">8GB RAM, 128GB Storage</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$50/day</p>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="group relative">
          <img src="https://i.pinimg.com/736x/a1/6a/26/a16a26c364d66fb5c1651766c5898e88.jpg" 
               alt="Handphone 2" 
               class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  iPhone 13 Pro
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">128GB, Super Retina Display</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$70/day</p>
          </div>
        </div>

        <!-- Bisa tambah produk lain -->
      </div>
    </div>
  </div>

</body>
</html>
