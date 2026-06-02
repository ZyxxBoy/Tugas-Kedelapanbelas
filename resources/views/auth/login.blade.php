<x-guest-layout>
    <div class="text-center mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Selamat Datang Kembali</h2>
        <p class="text-gray-500 mt-2 text-sm">Masuk ke akun Anda untuk melanjutkan</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" value="Email" class="font-semibold text-gray-700" />
            <x-text-input id="email" class="block mt-2 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Masukkan email Anda" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-5">
            <div class="flex justify-between items-center mb-2">
                <x-input-label for="password" value="Password" class="font-semibold text-gray-700" />
                @if (Route::has('password.request'))
                    <a class="text-sm font-medium text-indigo-600 hover:text-purple-600 transition-colors" href="{{ route('password.request') }}">
                        Lupa password?
                    </a>
                @endif
            </div>

            <x-text-input id="password" class="block w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="Masukkan password Anda" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-5">
            <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 transition-colors cursor-pointer" name="remember">
                <span class="ms-2 text-sm text-gray-600 group-hover:text-gray-900 transition-colors">Ingat saya</span>
            </label>
        </div>

        <div class="mt-8">
            <x-primary-button>
                Masuk Sekarang
            </x-primary-button>
        </div>

        <div class="mt-6 text-center text-sm text-gray-600">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-purple-600 transition-colors">Daftar di sini</a>
        </div>
    </form>
</x-guest-layout>
