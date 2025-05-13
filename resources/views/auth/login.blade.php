<<<<<<< HEAD
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Colombo Municipal Council</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> <!-- your custom CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background: #f5f6fa; font-family: sans-serif;">


<<<<<<< HEAD
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('messages.email')" />
            <x-text-input id="email"
                          class="block mt-1 w-full"
                          type="email"
                          name="email"
                          :value="old('email')"
                          required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('messages.password')" />
            <x-text-input id="password"
                          class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('messages.remember_me') }}</span>
            </label>
        </div>
<<<<<<< HEAD

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('messages.forgot_password') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('messages.log_in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
=======
=======

    <div style="max-width: 400px; margin: 50px auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); text-align: center;">
       

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                   required autofocus style="width: 100%; padding: 10px; border: 1px solid green; margin-bottom: 15px; border-radius: 4px;">
            @error('email')
                <div style="color: red; font-size: 0.9em;">{{ $message }}</div>
            @enderror

            <input type="password" name="password" placeholder="Password"
                   required style="width: 100%; padding: 10px; border: 1px solid green; margin-bottom: 15px; border-radius: 4px;">
            @error('password')
                <div style="color: red; font-size: 0.9em;">{{ $message }}</div>
            @enderror

            <div style="text-align: left; margin-bottom: 15px;">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>

            <button type="submit" style="width: 100%; background: #005f3c; color: white; padding: 10px; border: none; border-radius: 4px;">Log In</button>
>>>>>>> 341b4f5 (Frontend updates and layout improvements)

            @if (Route::has('password.request'))
<<<<<<< HEAD
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('messages.forgot_password') }}
                </a>
=======
                <div style="margin-top: 15px;">
                    <a href="{{ route('password.request') }}" style="color: #005f3c; text-decoration: underline;">Forgot your password?</a>
                </div>
>>>>>>> 341b4f5 (Frontend updates and layout improvements)
            @endif
        </form>

<<<<<<< HEAD
            <x-primary-button class="ms-3">
                {{ __('messages.log_in') }}
            </x-primary-button>
=======
        <div style="margin-top: 15px;">
            Don't have an account? <a href="{{ route('register') }}" style="color: #005f3c;">Sign Up</a>
>>>>>>> 341b4f5 (Frontend updates and layout improvements)
        </div>
    </div>

</body>
</html>
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
