@extends('layouts.app')

@section('content')
<div class="flex pt-32 justify-center items-center">
    <div class="w-full max-w-lg">
        <form method="POST" action="{{ route('login') }}" class="bg-gray-100 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="flex w-full justify-center" style="font-family: 'Dancing Script', cursive;">
                <p class="text-6xl">Blackjack</p>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('E-Mail Address') }}
                </label>
                <input id="email" name="email" type="email" autocomplete="email" placeholder="E-Mail" value="{{ old('email') }}" required class="shadow appearance-none border bg-gray-100 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('email')
                    <span class="bg-red-500 text-black" role="alert">
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
                    <span class="bg-red-500 text-black" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="mt-4">
                <div class="flex">
                    <button type="submit" class="bg-blue-700 hover:bg-blue-500 text-white py-2 px-4 mr-5 rounded focus:outline-none focus:shadow-outline flex-1 text-center">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="bg-red-700 hover:bg-blue-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline flex-1 text-center" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
