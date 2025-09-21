<!-- pembayaran/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembayaran</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="max-w-5xl mx-auto py-12 px-6 lg:px-8">

    <!-- Form Pembayaran -->
    <div class="bg-white p-8 rounded-xl shadow-lg">
      <h1 class="text-3xl font-bold text-gray-900 mb-4">Pembayaran</h1>
      <p class="text-lg text-gray-600 mb-6">Silakan pilih metode pembayaran Anda</p>

      <!-- Pilihan Pembayaran -->
      <div>
        <button class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg mb-4 hover:bg-blue-700 w-full">
          Pembayaran dengan Bank Transfer
        </button>
        <button class="bg-green-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-700 w-full">
          Pembayaran dengan OVO
        </button>
        <button class="bg-red-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-red-700 w-full">
          Pembayaran dengan GoPay
        </button>
      </div>
    </div>

  </div>

</body>
</html>
