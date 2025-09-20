<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Powerbank Products</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Hero Section for Powerbank Products -->
  <section class="relative bg-gray-800 text-white h-64">
    <img src="https://i.pinimg.com/1200x/3e/70/61/3e7061d3242d6b858e9644f02c20de55.jpg" 
         alt="Powerbank"
         class="absolute inset-0 w-full h-full object-cover opacity-40">
    <div class="relative container mx-auto text-center h-full flex flex-col justify-center items-center">
      <h1 class="text-5xl font-extrabold mb-6">Powerbank Products</h1>
      <p class="max-w-xl mx-auto text-lg text-gray-200 mb-8">
        Keep your devices charged with our powerful and portable powerbanks.
      </p>
    </div>
  </section>

  <!-- Product List for Powerbank -->
  <div class="bg-white py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Powerbank Collection</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <!-- Product 1 -->
        <div class="group relative">
          <img src="https://i.pinimg.com/1200x/f5/57/b9/f557b9909c8dcc15cec596d2dee696fc.jpg" 
               alt="Powerbank 1" 
               class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Powerbank 1
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">10.000 mAh Fast Charging</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$25</p>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="group relative">
          <img src="https://i.pinimg.com/1200x/18/db/7f/18db7fe2ac7dfd458029317fab2d612d.jpg" 
               alt="Powerbank 2" 
               class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Powerbank 2
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">20.000 mAh Slim Design</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$40</p>
          </div>
        </div>

        <!-- Bisa tambah produk lain -->
      </div>
    </div>
  </div>

</body>
</html>
