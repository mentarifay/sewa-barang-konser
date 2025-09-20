<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Storefront Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">

  <!-- Header / Navbar -->
  <header class="bg-gray-900 text-white">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
      <!-- Logo -->
      <div class="flex items-center space-x-2">
        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 0L24 22H0z"/>
        </svg>
        <span class="font-bold text-lg">Brand</span>
      </div>

      <!-- Menu -->
      <nav class="hidden md:flex space-x-8 items-center">
        <a href="/" class="hover:text-gray-300">Home</a>
        <a href="/tentang-kami" class="hover:text-gray-300">Tentang Kami</a>
        
                <!-- Dropdown Daftar Barang -->
        <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" class="hover:text-gray-300">Daftar Barang</button>
          <div x-show="open" @click.away="open = false" class="absolute left-0 mt-2 w-48 bg-white text-black rounded-lg shadow-lg py-2 z-50">
            <a href="{{ route('products.lightstick') }}" class="block px-4 py-2 hover:bg-gray-100">Lightstick</a>
            <a href="{{ route('products.powerbank') }}" class="block px-4 py-2 hover:bg-gray-100">Powerbank</a>
            <a href="{{ route('products.handphone') }}" class="block px-4 py-2 hover:bg-gray-100">Handphone</a>
          </div>
        </div>

        <a href="/hubungi-kami" class="hover:text-gray-300">Hubungi Kami</a>
      </nav>

      <!-- Right Menu -->
      <!-- Right Menu -->
      <div class="flex items-center space-x-6">
        <!-- Search Input -->
        <form action="#" method="GET" class="flex items-center">
          <input type="text" name="q" placeholder="Search..." 
                class="px-3 py-1 rounded-md text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
          <button type="submit" class="ml-2 text-white hover:text-gray-300">
            <!-- Ikon kaca pembesar (Heroicons) -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" 
                viewBox="0 0 24 24" 
                stroke-width="2" 
                stroke="currentColor" 
                class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
            </svg>
          </button>
        </form>

        
        <!-- Sign In Link -->
        <a href="/sign-in" class="hover:text-gray-300">Sign in</a>
        
        <!-- Create Account Link -->
        <a href="/create-account" class="hover:text-gray-300">Create an account</a>

        <button class="relative">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M3 3h18v18H3z"></path>
          </svg>
          <span class="absolute -top-2 -right-2 bg-white text-black text-xs px-2 py-0.5 rounded-full">0</span>
        </button>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative bg-gray-800 text-white h-screen">
    <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?auto=format&fit=crop&w=1500&q=80" 
         alt="Background" 
         class="absolute inset-0 w-full h-full object-cover opacity-40">
    <div class="relative container mx-auto text-center h-full flex flex-col justify-center items-center">
      <h1 class="text-5xl font-extrabold mb-6">New arrivals are here</h1>
      <p class="max-w-xl mx-auto text-lg text-gray-200 mb-8">
        The new arrivals have, well, newly arrived. Check out the latest options 
        from our summer small-batch release while they're still in stock.
      </p>
      <a href="/shop" 
         class="bg-white text-black font-semibold px-6 py-3 rounded-md shadow hover:bg-gray-200">
        Shop New Arrivals
      </a>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="bg-gray-900 text-white py-6">
    <div class="container mx-auto text-center">
      <p>&copy; 2025 Brand, All Rights Reserved</p>
    </div>
  </footer>

</body>
</html>
