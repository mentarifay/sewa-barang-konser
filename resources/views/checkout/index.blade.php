<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="max-w-5xl mx-auto py-12 px-6 lg:px-8">

    <!-- Checkout Form -->
    <div class="bg-white p-8 rounded-xl shadow-lg">
      <h1 class="text-3xl font-bold text-gray-900 mb-4">Checkout</h1>
      <p class="text-lg text-gray-600 mb-6">Verifikasi pesanan Anda dan lanjutkan ke pembayaran</p>

      <div class="mb-8">
        <h3 class="text-xl font-semibold text-gray-900">Detail Pemesanan</h3>
        <ul class="list-disc pl-5">
          <li>Lightstick SEVENTEEN - Rp 50.000 / hari</li>
          <li>Lightstick BTS - Rp 60.000 / hari</li>
        </ul>
      </div>

      <!-- Total Pembayaran -->
      <div class="mb-8">
        <h3 class="text-xl font-semibold text-gray-900">Total Pembayaran</h3>
        <p class="text-2xl font-bold text-blue-600">Rp 110.000</p>
      </div>

      <!-- Pembayaran -->
      <div>
        <a href="{{ route('payment') }}" class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700">
          Bayar Sekarang
        </a>
      </div>
    </div>

  </div>

</body>
</html>
