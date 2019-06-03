<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blackjack') }}</title>

    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Roboto&display=swap" rel="stylesheet">

    {{-- Styles --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Local Style --}}
    <style>
        :root {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900">
    <nav class="flex items-center justify-between flex-wrap bg-black p-1">
        <div class="flex items-center text-white mr-6">
            <a href="{{ url('/') }}" class="text-3xl hover:text-yellow-200" style="font-family: 'Dancing Script', cursive;">
                {{ config('app.name', 'Blackjack') }}
            </a>
        </div>
        <div class="text-white">
            @guest
                <a class="mr-6 hover:text-red-500" href="{{ route('login') }}">{{ __('Login') }}</a> 
                @if (Route::has('register'))
                    <a class="mr-6 hover:text-green-500" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <a class="mr-6 hover:text-red-500" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </div>
    </nav>
    <main id="app">
        @yield('content')
    </main>
</body>
</html>