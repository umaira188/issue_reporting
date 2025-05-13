<x-app-layout>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             {{ __('messages.profile') }}
        </h2>
    </x-slot>
<<<<<<< HEAD
=======
=======
    <div class="py-12 px-6 bg-white text-black rounded shadow-md">
>>>>>>> 341b4f5 (Frontend updates and layout improvements)
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @if(Auth::user()->role === 'user')
                {{-- ✅ Show all profile forms for normal users --}}
<<<<<<< HEAD
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
=======
                <div class="p-6 sm:p-10  dark:bg-green shadow sm:rounded-lg border-2 border-green-800">
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

<<<<<<< HEAD
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
=======
                <div class="p-6 sm:p-10 dark:bg-green shadow sm:rounded-lg border-2 border-green-800">
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

<<<<<<< HEAD
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
=======
                <div class="p-6 sm:p-10 dark:bg-green shadow sm:rounded-lg border-2 border-green-800">
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
          @else
    {{-- 🚫 Block access for admins --}}
    <div class="p-4 sm:p-8 bg-yellow-100 text-yellow-800 shadow sm:rounded-lg">
        <div class="max-w-xl">
            <p class="font-semibold mb-2">{{ __('messages.access_restricted') }}</p>
            <p>{{ __('messages.logged_in_as') }} <strong>{{ Auth::user()->role }}</strong>.</p>
            <p>{{ __('messages.profile_disabled') }}</p>
        </div>
    </div>
@endif


        </div>
    </div>
</x-app-layout>
