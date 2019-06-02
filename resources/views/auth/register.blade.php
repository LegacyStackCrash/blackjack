@extends('layouts.app')

@section('content')
<div class="flex w-full h-full justify-center items-center">
    <div class="w-full max-w-lg">
        <form method="POST" action="{{ route('register') }}" class="bg-gray-100 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="flex w-full justify-center" style="font-family: 'Dancing Script', cursive;">
                <p class="text-6xl">Blackjack</p>
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Name') }}
                </label>
                <input id="name" name="name" type="text" autocomplete="name" placeholder="Full Name" required class="shadow appearance-none border bg-gray-100 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('E-Mail Address') }}
                </label>
                <input id="email" name="email" type="email" autocomplete="email" placeholder="E-Mail" required class="shadow appearance-none border bg-gray-100 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Password') }}
                </label>
                <input id="password" name="password" type="password" autocomplete="new-password" placeholder="Password" required class="shadow appearance-none bg-gray-100 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Confirm Password') }}
                </label>
                <input id="password-confirm" name="password-confirm" type="password" autocomplete="new-password" placeholder="Confirm Password" required class="shadow appearance-none bg-gray-100 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mt-4">
                <div class="w-full p-2">
                    <button type="submit" class="bg-blue-900 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
