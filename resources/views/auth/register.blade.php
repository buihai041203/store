<x-guest-layout>
    <div class="mb-6 text-center">
        <h1 class="text-2xl font-bold text-gray-900">Tạo tài khoản</h1>
        <p class="mt-2 text-sm text-gray-600">Điền thông tin bên dưới để tạo tài khoản mới.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
            <x-input-label for="name" value="Họ và tên" />
            <x-text-input id="name" class="mt-1 block w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email" value="Email" />
            <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" value="Mật khẩu" />
            <x-text-input id="password" class="mt-1 block w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" value="Nhập lại mật khẩu" />
            <x-text-input id="password_confirmation" class="mt-1 block w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-primary-button class="w-full justify-center py-3 text-sm font-semibold">
            Đăng ký tài khoản
        </x-primary-button>

        <div class="text-center text-sm text-gray-600">
            Đã có tài khoản?
            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-800">
                Đăng nhập
            </a>
        </div>
    </form>
</x-guest-layout>
