@extends('layouts.app')

@section('content')
<div class="flex mt-12 justify-center items-center">
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
                <input id="name" name="name" type="text" autocomplete="name" placeholder="Full Name" value="{{ old('name') }}" required class="shadow appearance-none border bg-gray-100 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('name')
                    <span class="text-red-500 text-black" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('E-Mail Address') }}
                </label>
                <input id="email" name="email" type="email" autocomplete="email" placeholder="E-Mail" value="{{ old('email') }}" required class="shadow appearance-none border bg-gray-100 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('email')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Password') }}
                </label>
                <input id="password" name="password" type="password" autocomplete="new-password" placeholder="Password" required class="shadow appearance-none bg-gray-100 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('password')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Confirm Password') }}
                </label>
                <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" placeholder="Confirm Password" required class="shadow appearance-none bg-gray-100 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mt-4">
                <div class="w-full p-2">
                    <button type="submit" class="bg-blue-700 hover:bg-blue-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
