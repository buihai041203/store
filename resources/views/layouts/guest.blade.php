<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Store') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen bg-gray-100">
            <div class="flex min-h-screen items-center justify-center px-4 py-10 sm:px-6 lg:px-8">
                <div class="w-full max-w-md">
                    <div class="mb-6 text-center">
                        <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-2xl bg-indigo-600 px-5 py-3 text-2xl font-bold tracking-wide text-white shadow-sm">
                            Store
                        </a>
                        <p class="mt-4 text-sm text-gray-600">Đăng nhập hoặc tạo tài khoản để tiếp tục.</p>
                    </div>

                    <div class="overflow-hidden rounded-2xl bg-white px-6 py-6 shadow-md sm:px-8">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
