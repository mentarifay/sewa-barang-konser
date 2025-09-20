<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Custom animations */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .fade-in {
      animation: fadeIn 0.8s ease-out forwards;
    }
    
    /* Smooth scrolling */
    html {
      scroll-behavior: smooth;
    }
    
    /* Team card hover effect */
    .team-card {
      transition: all 0.3s ease;
    }
    
    .team-card:hover {
      transform: translateY(-10px);
    }
    
    /* Parallax effect for hero section */
    .parallax-bg {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-gray-900 text-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
      <div class="flex items-center space-x-2">
        <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 0L24 22H0z"/>
        </svg>
        <span class="font-extrabold text-2xl">Brand</span>
      </div>
    </div>
  </header>

  <!-- Tentang Kami Content with Background Image -->
  <section class="relative py-32 parallax-bg text-white" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1519681393784-e1f7bb1243f3?crop=entropy&cs=tinysrgb&fit=max&ixid=MnwzNjUyOXwwfDF8c2VhY3J8MHx8Y3VsdHVyYWwlMjBzb2NpZXR5fGVufDB8fHx8&ixlib=rb-1.2.1&q=80&w=1080');">
    <div class="container mx-auto text-center relative z-10 px-6">
      <h2 class="text-5xl font-extrabold mb-6 fade-in">Tentang Kami</h2>
      <div class="max-w-3xl mx-auto">
        <p class="text-xl mb-6 fade-in" style="animation-delay: 0.2s">
          Kami adalah penyedia sewa barang untuk konser yang menyediakan berbagai peralatan untuk memastikan acara Anda sukses. Kami fokus pada pelayanan terbaik dengan harga terjangkau.
        </p>
        <p class="text-xl mb-12 fade-in" style="animation-delay: 0.4s">
          Kami menyediakan berbagai produk seperti lightstick, powerbank, handphone untuk membantu menciptakan pengalaman konser yang tak terlupakan. Semua produk kami dalam kondisi prima dan siap digunakan.
        </p>
      </div>

      <!-- Team Section with Background Image -->
      <div class="mt-20 fade-in" style="animation-delay: 0.6s">
        <div class="relative rounded-xl overflow-hidden shadow-2xl max-w-5xl mx-auto">
          <!-- Team Background Image -->
          <div class="relative h-96 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://storage.googleapis.com/storage-ajaib-prd-platform-wp-artifact/2020/06/konser-k-pop.jpg');">
            <div class="absolute inset-0 flex items-center justify-center">
              <div class="text-center p-8 bg-black bg-opacity-60 rounded-lg max-w-2xl">
                <h3 class="text-3xl font-bold mb-4">Tim Kami</h3>
                <p class="text-lg">
                  Kami adalah tim yang berdedikasi untuk memberikan produk terbaik dan pengalaman yang memuaskan dalam setiap acara. Tim kami siap memberikan dukungan penuh untuk acara konser atau event besar Anda.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Services Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold text-center mb-16 text-gray-800">Layanan Kami</h2>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Lightstick -->
        <div class="text-center p-8 rounded-lg shadow-lg hover:shadow-xl transition team-card">
          <div class="bg-yellow-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-lightbulb text-white text-2xl"></i>
          </div>
          <h3 class="text-2xl font-semibold mb-4 text-gray-800">Lightstick</h3>
          <p class="text-gray-600">Sewa lightstick untuk menambah semangat di konser atau acara musik Anda. Kami menyediakan berbagai model dan ukuran untuk berbagai jenis acara.</p>
        </div>
        
        <!-- Powerbank -->
        <div class="text-center p-8 rounded-lg shadow-lg hover:shadow-xl transition team-card">
          <div class="bg-yellow-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-battery-full text-white text-2xl"></i>
          </div>
          <h3 class="text-2xl font-semibold mb-4 text-gray-800">Powerbank</h3>
          <p class="text-gray-600">Kami menyediakan powerbank berkualitas untuk memastikan perangkat elektronik Anda tetap aktif selama acara berlangsung.</p>
        </div>

        <!-- Handphone -->
        <div class="text-center p-8 rounded-lg shadow-lg hover:shadow-xl transition team-card">
          <div class="bg-yellow-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-mobile-alt text-white text-2xl"></i>
          </div>
          <h3 class="text-2xl font-semibold mb-4 text-gray-800">Handphone</h3>
          <p class="text-gray-600">Kami juga menyediakan sewa handphone untuk komunikasi selama acara berlangsung. Pastikan Anda selalu terhubung dengan tim Anda.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="py-20 bg-gray-900 text-white">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div>
          <div class="text-4xl font-bold text-yellow-500 mb-2">10+</div>
          <div class="text-gray-300">Tahun Pengalaman</div>
        </div>
        <div>
          <div class="text-4xl font-bold text-yellow-500 mb-2">500+</div>
          <div class="text-gray-300">Acara Disukseskan</div>
        </div>
        <div>
          <div class="text-4xl font-bold text-yellow-500 mb-2">100+</div>
          <div class="text-gray-300">Peralatan Tersedia</div>
        </div>
        <div>
          <div class="text-4xl font-bold text-yellow-500 mb-2">50+</div>
          <div class="text-gray-300">Pelanggan Puas</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-6 text-center text-gray-400">
      <p>&copy; 2025 Brand. All Rights Reserved.</p>
    </div>
  </footer>

</body>
</html>
