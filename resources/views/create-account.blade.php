<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-gray-900 text-white">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
      <div class="flex items-center space-x-2">
        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 0L24 22H0z"/>
        </svg>
        <span class="font-bold text-lg">Brand</span>
      </div>
    </div>
  </header>

  <!-- Create Account Form -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6 max-w-lg">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Create Account</h2>
      <form action="{{ route('register') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
          @csrf
        
        <!-- Full Name -->
        <div>
          <label for="full-name" class="block text-gray-700">Nama Lengkap</label>
          <input type="text" id="full-name" name="full-name" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Nama Lengkap">
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-gray-700">Email</label>
          <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Email">
        </div>

        <!-- Phone Number -->
        <div>
          <label for="phone" class="block text-gray-700">No. HP</label>
          <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="No. HP">
        </div>

        <!-- Address -->
        <div>
          <label for="address" class="block text-gray-700">Alamat</label>
          <textarea id="address" name="address" required rows="4" class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Alamat"></textarea>
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-gray-700">Password</label>
          <input type="password" id="password" name="password" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Password">
        </div>

        <!-- Confirm Password -->
        <div>
          <label for="confirm-password" class="block text-gray-700">Konfirmasi Password</label>
          <input type="password" id="confirm-password" name="confirm-password" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Konfirmasi Password">
        </div>

        <!-- Upload KTP -->
        <div>
          <label for="ktp" class="block text-gray-700">Upload KTP</label>
          <input type="file" id="ktp" name="ktp" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
        </div>

        <!-- Upload KK -->
        <div>
          <label for="kk" class="block text-gray-700">Upload KK</label>
          <input type="file" id="kk" name="kk" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
        </div>

        <!-- Terms and Conditions -->
        <div class="flex items-center">
          <input type="checkbox" id="terms" name="terms" required class="h-5 w-5 text-yellow-500 focus:ring-2 focus:ring-yellow-500">
          <label for="terms" class="ml-2 text-gray-700">Saya setuju dengan <a href="/terms-and-conditions" class="text-yellow-500 hover:underline">ketentuan dan kebijakan</a></label>
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit" class="w-full py-3 bg-yellow-500 hover:bg-yellow-600 text-white font-bold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
            Daftar
          </button>
        </div>

        <!-- Sign In Link -->
        <div class="text-center">
          <p class="text-sm text-gray-600">Already have an account? <a href="/sign-in" class="text-yellow-500 hover:underline">Sign in</a></p>
        </div>
      </form>
    </div>
  </section>

</body>
</html>
