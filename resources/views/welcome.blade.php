<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Meta --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Title --}}
        <title>Blackjack</title>

        {{-- Fonts --}}
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Roboto&display=swap" rel="stylesheet">

        {{-- Styles Imports --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- Local Styles --}}
        <style>
            main {
                font-size: 150px;
                font-family: 'Dancing Script', cursive;
                color: #e2e8f0;
            }
            nav div {
                font-family: 'Roboto', sans-serif;
            }
        </style>
    </head>
    <body class="bg-gray-900 w-screen h-screen flex flex-col">
        <nav class="flex p-6 justify-end">
            @if (Route::has('login'))
                <div class="text-gray-300 font-medium">
                    @auth
                        <a class="p-2 hover:text-red-500" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="p-2 hover:text-red-500" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="p-2 hover:text-green-500" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
        <main class="flex flex-grow items-center justify-center">
            Blackjack
        </main>
        <footer class="flex text-pink-300 text-xs pb-1 pr-3 justify-end">
            Created By: Harden Wallace
        </footer>
    </body>
</html>
