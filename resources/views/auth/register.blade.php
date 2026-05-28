<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - Modern App</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-50 flex min-h-screen items-center justify-center p-4 antialiased">
    <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-xl shadow-slate-100">
        <!-- Header -->
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold tracking-tight text-slate-900">
                Buat Akun
            </h1>
            <p class="mt-2 text-sm text-slate-500">
                Mulai perjalanan Anda bersama kami hari ini.
            </p>
        </div>

        <!-- Form -->
        <form action="{{ route('register') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Nama -->
            <div>
                <label for="name" class="block text-sm font-medium text-slate-700">Nama Lengkap</label>
                <input type="text" id="name" name="name" required
                    class="mt-1.5 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-none transition" />
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-slate-700">Alamat Email</label>
                <input type="email" id="email" name="email" required
                    class="mt-1.5 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-none transition" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="mt-1.5 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm placeholder-slate-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-none transition" />
            </div>

            <!-- Button Submit -->
            <button type="submit"
                class="w-full rounded-xl bg-indigo-600 py-3 text-sm font-semibold text-white shadow-md shadow-indigo-100 hover:bg-indigo-700 active:scale-[0.98] transition">
                Daftar Sekarang
            </button>
        </form>

        <!-- Footer -->
        <p class="mt-8 text-center text-sm text-slate-600">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:underline">Masuk di sini</a>
        </p>
    </div>
</body>

</html>
