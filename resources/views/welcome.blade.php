<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Storefront Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
          <button @click="open = !open" class="hover:text-gray-300 focus:outline-none">
            Daftar Barang
          </button>
          <!-- Dropdown Menu -->
          <div x-show="open" @click.away="open = false"
               x-transition
               class="absolute left-0 mt-2 w-48 bg-white text-black rounded-lg shadow-lg py-2 z-50">
            <a href="/lightstick" class="block px
