<!-- resources/views/product.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

  <section class="py-12">
    <div class="container mx-auto px-6 lg:px-20">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

        <!-- Gambar Produk -->
        <div>
          <img src="https://i.pinimg.com/1200x/91/fb/ef/91fbef7939b5e77d2d4ba230e6b58d92.jpg" 
               alt="Lightstick SEVENTEEN" 
               class="w-full rounded-lg shadow-lg">
        </div>

        <!-- Detail Produk -->
        <div class="flex flex-col justify-center">
          <h1 class="text-3xl font-bold mb-4">Lightstick BTS</h1>
          <p class="text-gray-700 mb-6">
            Kondisi barang sewa sangat baik, full box, baterai baru, 
            cocok untuk konser atau acara fanmeeting.  
            Tersedia stok terbatas, jangan sampai kehabisan!
          </p>
          <p class="text-2xl font-semibold text-indigo-600 mb-6">Rp 50.000 / hari</p>

          <!-- Tombol Sewa -->
          <a href="{{ route('pembayaran') }}"
             class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition">
            Sewa Sekarang
          </a>
        </div>

      </div>
    </div>
  </section>

</body>
</html>
