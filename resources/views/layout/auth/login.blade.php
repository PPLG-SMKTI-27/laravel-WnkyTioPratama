<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login — Winky</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#070711] flex items-center justify-center text-slate-100">

  <div class="w-full max-w-md bg-white/5 border border-white/10 backdrop-blur-xl rounded-2xl p-8">

    <h1 class="text-3xl font-bold text-center mb-6 text-violet-400">
      Login Winky Project
    </h1>

    @if ($errors->any())
      <div class="mb-4 text-sm text-red-400">
        {{ $errors->first() }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
      @csrf

      <input
        type="email"
        name="email"
        placeholder="Email"
        required
        class="w-full px-4 py-3 rounded-lg bg-black/40 border border-white/10"
      >

      <input
        type="password"
        name="password"
        placeholder="Password"
        required
        class="w-full px-4 py-3 rounded-lg bg-black/40 border border-white/10"
      >

      <button class="w-full bg-violet-600 py-3 rounded-lg font-semibold">
        Login
      </button>
    </form>

    <p class="text-sm text-center mt-4 text-slate-400">
      Belum punya akun?
      <a href="{{ route('register') }}" class="text-violet-400">Register</a>
    </p>
  </div>

</body>
</html>
