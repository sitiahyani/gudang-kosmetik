<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Glowsya</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-pink-50 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg relative">

    <!-- Logo Bundar dengan Garis Emas -->
    <div class="absolute -top-16 left-1/2 transform -translate-x-1/2">
      <div class="w-24 h-24 rounded-full border-4 border-yellow-400 bg-white flex items-center justify-center shadow-md">
        <img src="/img/logo.png" alt="Logo Glowsya" class="w-16 h-16 object-contain rounded-full">
      </div>
    </div>

    <h2 class="text-center text-2xl font-bold text-pink-500 mt-12 mb-6">Login ke Glowsya</h2>

        @if(session('error'))
        <div class="text-red-500 text-sm mb-4 text-center">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}" class="space-y-4">
        @csrf
      <div>
        <label class="block text-sm font-medium mb-1">Username</label>
        <input type="text" name="username" class="w-full border border-pink-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-pink-400" required>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Password</label>
        <div class="relative">
          <input type="password" name="password" id="password" class="w-full border border-pink-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-pink-400" required>
          <span onclick="togglePassword()" class="absolute right-3 top-2.5 cursor-pointer text-pink-400 hover:text-pink-600">
            <span class="material-icons" id="eye-icon">visibility</span>
          </span>
        </div>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Login Sebagai</label>
        <select name="role" class="w-full border border-pink-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-pink-400" required>
          <option value="">-- Pilih Role --</option>
          <option value="admin">Admin</option>
          <option value="karyawan">Karyawan</option>
        </select>
      </div>

      <button type="submit" class="w-full bg-pink-500 text-white font-semibold py-2 rounded hover:bg-pink-600 transition">
        Login
    </button>
    </form>
  </div>

  <script>
    function togglePassword() {
      const input = document.getElementById('password');
      const icon = document.getElementById('eye-icon');

      if (input.type === 'password') {
        input.type = 'text';
        icon.textContent = 'visibility_off';
      } else {
        input.type = 'password';
        icon.textContent = 'visibility';
      }
    }
  </script>

</body>
</html>
