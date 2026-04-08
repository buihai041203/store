<x-guest-layout>
    <div class="mb-6 text-center">
        <h1 class="text-2xl font-bold text-gray-900">Đăng nhập</h1>
        <p class="mt-2 text-sm text-gray-600">Nhập email và mật khẩu để truy cập cửa hàng.</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <x-input-label for="email" value="Email" />
            <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" value="Mật khẩu" />
            <x-text-input id="password" class="mt-1 block w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between gap-4 text-sm">
            <label for="remember_me" class="inline-flex items-center text-gray-600">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2">Ghi nhớ đăng nhập</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-indigo-600 hover:text-indigo-800" href="{{ route('password.request') }}">
                    Quên mật khẩu?
                </a>
            @endif
        </div>

        <x-primary-button class="w-full justify-center py-3 text-sm font-semibold">
            Đăng nhập
        </x-primary-button>

        <div class="text-center text-sm text-gray-600">
            Chưa có tài khoản?
            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-800">
                Đăng ký ngay
            </a>
        </div>
    </form>
</x-guest-layout>
