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

      <!-- Pilihan Pembayaran dengan Bank Transfer -->
      <div>
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Pembayaran melalui Bank Transfer</h3>

        <!-- Bank Transfer Options -->
        <div class="space-y-4">
          <div class="flex items-center">
            <input type="radio" name="bank" id="bank1" class="mr-3">
            <label for="bank1" class="text-lg text-gray-900">Bank BCA - 1234567890</label>
          </div>
          <div class="flex items-center">
            <input type="radio" name="bank" id="bank2" class="mr-3">
            <label for="bank2" class="text-lg text-gray-900">Bank Mandiri - 9876543210</label>
          </div>
          <div class="flex items-center">
            <input type="radio" name="bank" id="bank3" class="mr-3">
            <label for="bank3" class="text-lg text-gray-900">Bank BRI - 1122334455</label>
          </div>
        </div>
      </div>

      <!-- Konfirmasi Pembayaran -->
      <div class="mt-8">
        <p class="text-lg text-gray-600 mb-4">Silakan transfer ke nomor rekening yang telah dipilih dan konfirmasi pembayaran Anda.</p>
        <a href="{{ route('payment.confirmation') }}" class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700">
          Konfirmasi Pembayaran
        </a>
      </div>
    </div>

  </div>

</body>
</html>
