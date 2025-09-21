<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Pembayaran</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="max-w-5xl mx-auto py-12 px-6 lg:px-8">

    <!-- Status Pembayaran -->
    <div class="bg-white p-8 rounded-xl shadow-lg">
      <h1 class="text-3xl font-bold text-gray-900 mb-4">Status Pembayaran</h1>

      <div class="text-lg text-gray-600 mb-6">
        <p>Status pembayaran Anda saat ini:</p>

        <!-- Misalnya jika sudah terverifikasi -->
        <div class="bg-green-100 text-green-800 p-6 rounded-lg shadow mt-4">
          <h2 class="font-semibold text-lg">Pembayaran Berhasil!</h2>
          <p>Terima kasih, pembayaran Anda telah diterima. Pesanan Anda akan segera diproses.</p>
        </div>

        <!-- Atau jika masih menunggu verifikasi -->
        <!-- <div class="bg-yellow-100 text-yellow-800 p-6 rounded-lg shadow mt-4">
          <h2 class="font-semibold text-lg">Pembayaran Menunggu Verifikasi</h2>
          <p>Terima kasih atas pembayaran Anda. Kami sedang memverifikasi bukti transfer Anda. Mohon tunggu konfirmasi lebih lanjut.</p>
        </div> -->
      </div>

      <div class="mt-8">
        <a href="{{ route('home') }}" class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700">
          Kembali ke Beranda
        </a>
      </div>
    </div>

  </div>

</body>
</html>
