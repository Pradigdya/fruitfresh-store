<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Modern App</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-50 flex min-h-screen items-center justify-center p-4 antialiased">

    <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-xl shadow-slate-100">
        <!-- Header -->
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold tracking-tight text-slate-900">Selamat Datang</h1>
            <p class="mt-2 text-sm text-slate-500">Silakan masuk ke akun Anda.</p>
        </div>

        <!-- Form -->
        <form action="{{ route('login') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-slate-700">Alamat Email</label>
                <input type="email" id="email" name="email" required
                    class="mt-1.5 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-none transition">
            </div>

            <!-- Password -->
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                    <a href="#" class="text-xs font-medium text-indigo-600 hover:underline">Lupa password?</a>
                </div>
                <input type="password" id="password" name="password" required
                    class="mt-1.5 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-none transition">
            </div>

            <!-- Remember Me & Utility -->
            <div class="flex items-center">
                <input type="checkbox" id="remember" name="remember"
                    class="h-4 w-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                <label for="remember" class="ml-2 text-sm text-slate-600">Ingat saya di perangkat ini</label>
            </div>

            <!-- Button Submit -->
            <button type="submit"
                class="w-full rounded-xl bg-indigo-600 py-3 text-sm font-semibold text-white shadow-md shadow-indigo-100 hover:bg-indigo-700 active:scale-[0.98] transition">
                Masuk
            </button>
        </form>

        <!-- Footer -->
        <p class="mt-8 text-center text-sm text-slate-600">
            Belum punya akun?
            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:underline">Daftar gratis</a>
        </p>
    </div>

</body>

</html>
