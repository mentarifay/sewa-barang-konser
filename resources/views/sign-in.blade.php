<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
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

  <!-- Sign In Form -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6 max-w-lg">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Sign In</h2>
      <form action="#" method="POST" class="space-y-6">
        
        <!-- Email -->
        <div>
          <label for="email" class="block text-gray-700">Email</label>
          <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Email">
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-gray-700">Password</label>
          <input type="password" id="password" name="password" required class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Password">
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit" class="w-full py-3 bg-yellow-500 hover:bg-yellow-600 text-white font-bold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
            Sign In
          </button>
        </div>

        <!-- Create Account Link -->
        <div class="text-center">
          <p class="text-sm text-gray-600">Don't have an account? <a href="/create-account" class="text-yellow-500 hover:underline">Create an account</a></p>
        </div>
      </form>
    </div>
  </section>

</body>
</html>
