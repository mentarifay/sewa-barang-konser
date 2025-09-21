<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konfirmasi Pembayaran</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="max-w-5xl mx-auto py-12 px-6 lg:px-8">

    <!-- Form Konfirmasi Pembayaran -->
    <div class="bg-white p-8 rounded-xl shadow-lg">
      <h1 class="text-3xl font-bold text-gray-900 mb-4">Konfirmasi Pembayaran</h1>
      <p class="text-lg text-gray-600 mb-6">Silakan unggah bukti transfer untuk melanjutkan.</p>

      <!-- Form Upload Bukti Pembayaran -->
      <div class="space-y-4">
        <div>
          <label class="block text-lg text-gray-900">Pilih Bank:</label>
          <select class="w-full px-4 py-2 border rounded-lg">
            <option value="bca">Bank BCA</option>
            <option value="mandiri">Bank Mandiri</option>
            <option value="bri">Bank BRI</option>
          </select>
        </div>

        <div>
          <label class="block text-lg text-gray-900">Unggah Bukti Transfer:</label>
          <input type="file" class="w-full p-4 border rounded-lg">
        </div>

        <div>
          <button class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700">
            Kirim Konfirmasi Pembayaran
          </button>
        </div>
      </div>
    </div>

  </div>

</body>
</html>
