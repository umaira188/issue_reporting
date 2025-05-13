<<<<<<< HEAD
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Colombo Municipal Council</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-[Inter]">
    
   

<<<<<<< HEAD
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('messages.name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('messages.email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('messages.password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('messages.confirm_password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('messages.already_registered') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('messages.register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<<<<<<< HEAD
=======
=======
    <div class="flex justify-center items-center h-[90vh]">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <div class="flex justify-center mb-6">
                <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
                </svg>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <input type="text" name="name" placeholder="Name"
                       value="{{ old('name') }}"
                       required
                       class="w-full border border-green-800 px-4 py-2 mb-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500"/>

                <input type="email" name="email" placeholder="Email"
                       value="{{ old('email') }}"
                       required
                       class="w-full border border-green-800 px-4 py-2 mb-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500"/>

                <input type="password" name="password" placeholder="Password"
                       required
                       class="w-full border border-green-800 px-4 py-2 mb-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500"/>

                <input type="password" name="password_confirmation" placeholder="Confirm Password"
                       required
                       class="w-full border border-green-800 px-4 py-2 mb-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500"/>

                <button type="submit"
                        class="w-full bg-green-900 text-white py-2 rounded hover:bg-green-800">
                    Sign Up
                </button>
            </form>

            <div class="text-center mt-4 text-sm">
                Already have an account?
                <a href="{{ route('login') }}" class="text-green-900 font-semibold hover:underline">Login</a>
            </div>
        </div>
    </div>
</body>
</html>
>>>>>>> 341b4f5 (Frontend updates and layout improvements)
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
