<form action="{{ route('create.account.store') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
    @csrf
    
    <!-- Full Name -->
    <div>
      <label for="name" class="block text-gray-700">Nama Lengkap</label>
      <input type="text" id="name" name="name" value="{{ old('name') }}" required 
             class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
      @error('name')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Email -->
    <div>
      <label for="email" class="block text-gray-700">Email</label>
      <input type="email" id="email" name="email" value="{{ old('email') }}" required 
             class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
      @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Phone -->
    <div>
      <label for="phone" class="block text-gray-700">No. HP</label>
      <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required 
             class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
      @error('phone')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Address -->
    <div>
      <label for="address" class="block text-gray-700">Alamat</label>
      <textarea id="address" name="address" rows="4" required 
                class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">{{ old('address') }}</textarea>
      @error('address')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Password -->
    <div>
      <label for="password" class="block text-gray-700">Password</label>
      <input type="password" id="password" name="password" required 
             class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
      @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Confirm Password -->
    <div>
      <label for="password_confirmation" class="block text-gray-700">Konfirmasi Password</label>
      <input type="password" id="password_confirmation" name="password_confirmation" required 
             class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
    </div>

    <!-- Upload KTP -->
    <div>
      <label for="ktp" class="block text-gray-700">Upload KTP</label>
      <input type="file" id="ktp" name="ktp" required 
             class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
      @error('ktp')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Upload KK -->
    <div>
      <label for="kk" class="block text-gray-700">Upload KK</label>
      <input type="file" id="kk" name="kk" required 
             class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500">
      @error('kk')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Terms -->
    <div class="flex items-center">
      <input type="checkbox" id="agree" name="agree" class="h-5 w-5 text-yellow-500 focus:ring-2 focus:ring-yellow-500" {{ old('agree') ? 'checked' : '' }}>
      <label for="agree" class="ml-2 text-gray-700">
        Saya setuju dengan <a href="/terms-and-conditions" class="text-yellow-500 hover:underline">ketentuan</a>
      </label>
      @error('agree')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Submit -->
    <div>
      <button type="submit" class="w-full py-3 bg-yellow-500 hover:bg-yellow-600 text-white font-bold rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
        Daftar
      </button>
    </div>
</form>
