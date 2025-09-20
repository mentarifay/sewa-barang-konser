<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hubungi Kami</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-gray-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="font-bold text-xl">Sewa Barang Konser</h1>
      <nav class="space-x-4">
        <a href="/" class="hover:text-gray-300">Home</a>
        <a href="{{ route('shop') }}" class="hover:text-gray-300">Shop</a>
        <a href="{{ route('hubungi') }}" class="hover:text-gray-300">Hubungi</a>
      </nav>
    </div>
  </header>

  <!-- Konten Hubungi Kami -->
  <section class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold mb-6 text-center">Hubungi Kami</h2>
    <p class="text-center mb-8 text-gray-600">
      Ada pertanyaan atau butuh bantuan? Silakan hubungi kami melalui informasi berikut.
    </p>

    <!-- Info Kontak -->
    <div class="grid md:grid-cols-3 gap-6 mb-12 text-center">

      <!-- WhatsApp -->
      <div class="bg-white shadow rounded-lg p-6 flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-500 mb-3" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12.04 2c-5.51 0-10 4.49-10 10 0 1.77.47 3.5 1.37 5.02L2 22l5.11-1.34c1.45.79 3.09 1.2 4.75 1.2h.01c5.51 0 10-4.49 10-10s-4.49-10-10-10zM12 20.07h-.01c-1.5 0-2.96-.4-4.23-1.16l-.3-.18-3.04.8.81-2.96-.2-.3C4.34 15.01 4 13.54 4 12.01c0-4.41 3.59-8 8-8s8 3.59 8 8c0 4.41-3.59 8.06-8 8.06zm4.27-5.34c-.23-.12-1.36-.67-1.57-.74-.21-.08-.36-.12-.52.12-.16.23-.6.74-.74.9-.14.16-.27.17-.5.06-.23-.12-.96-.35-1.82-1.11-.67-.6-1.12-1.34-1.25-1.57-.13-.23-.01-.35.1-.47.1-.1.23-.27.34-.4.11-.13.14-.23.21-.39.07-.16.04-.3-.02-.42-.06-.12-.52-1.26-.72-1.72-.19-.46-.39-.4-.52-.41-.13-.01-.28-.01-.43-.01s-.4.06-.61.28c-.21.23-.8.78-.8 1.9s.82 2.2.93 2.35c.12.16 1.62 2.48 3.93 3.48.55.24.98.38 1.31.49.55.17 1.05.15 1.44.09.44-.07 1.36-.56 1.55-1.1.19-.54.19-1 .13-1.1-.06-.1-.21-.16-.44-.28z"/>
        </svg>
        <h3 class="text-lg font-semibold mb-1">WhatsApp</h3>
        <p class="text-gray-600">+62 812 3456 7890</p>
      </div>

      <!-- Email -->
        <div class="bg-white shadow rounded-lg p-6 flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" 
                class="h-10 w-10 text-blue-500 mb-3" 
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M16 12l-4 4-4-4m8-6H8a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2V8a2 2 0 00-2-2z" />
            </svg>
            <h3 class="text-lg font-semibold mb-1">Email</h3>
            <p class="text-gray-600">sewabarangkonser@gmail.com</p>
        </div>



      <!-- Alamat -->
      <div class="bg-white shadow rounded-lg p-6 flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-red-500 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.104-.896-2-2-2s-2 .896-2 2 .896 2 2 2 2-.896 2-2z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-7.333 8-13A8 8 0 104 9c0 5.667 8 13 8 13z" />
        </svg>
        <h3 class="text-lg font-semibold mb-1">Alamat</h3>
        <p class="text-gray-600">Jl. Sudirman No. 10, Jakarta</p>
      </div>
    </div>
  </section>

</body>
</html>