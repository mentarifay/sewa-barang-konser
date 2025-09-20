<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lightstick Products</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Hero Section for Lightstick Products -->
  <section class="relative bg-gray-800 text-white h-64">
    <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg" 
         alt="Lightstick"
         class="absolute inset-0 w-full h-full object-cover opacity-40">
    <div class="relative container mx-auto text-center h-full flex flex-col justify-center items-center">
      <h1 class="text-5xl font-extrabold mb-6">Lightstick Products</h1>
      <p class="max-w-xl mx-auto text-lg text-gray-200 mb-8">
        Explore our collection of lightsticks for your event or collection.
      </p>
    </div>
  </section>

  <!-- Product List for Lightstick -->
  <div class="bg-white py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Lightstick Collection</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <!-- Product 1 -->
        <div class="group relative">
          <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Lightstick 1" class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Lightstick 1
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Bright LED</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$30</p>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="group relative">
          <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-02.jpg" alt="Lightstick 2" class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Lightstick 2
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">RGB Color</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$35</p>
          </div>
        </div>

        <!-- More products can be added here -->
      </div>
    </div>
  </div>

</body>
</html>
