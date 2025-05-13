<<<<<<< HEAD
{{-- Authenticated users --}}
@auth
=======
@auth
<<<<<<< HEAD
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
<nav class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            {{-- Navigation Links --}}
            <div class="flex space-x-6">
                {{-- USER --}}
                @if(Auth::user()->role === 'user')
                    <a href="{{ route('lodge-complaint') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.lodge_complaint') }}
                    </a>
                    <a href="{{ route('complaint.history') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.complaint_history') }}
                    </a>
                    <a href="{{ route('feedback') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.feedback') }}
                    </a>
                    <a href="{{ route('profile.edit') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.profile') }}
                    </a>

                {{-- SUPER ADMIN --}}
                @elseif(Auth::user()->role === 'super_admin')
                    <a href="{{ route('admin.manage') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.manage_admins') }}
                    </a>
                    <a href="{{ route('admin.all-complaints') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.all_complaints') }}
                    </a>
                    <a href="{{ route('admin.all-feedbacks') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.all_feedbacks') }}
                    </a>

                {{-- ENV POLICE ADMIN --}}
                @elseif(Auth::user()->role === 'env_police')
                    <a href="{{ route('admin.env') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.env_dashboard') }}
                    </a>
                    <a href="{{ route('profile.edit') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.profile') }}
                    </a>

                {{-- MUNICIPAL ADMIN --}}
                @elseif(Auth::user()->role === 'municipal')
                    <a href="{{ route('admin.municipal') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.municipal_dashboard') }}
                    </a>
                    <a href="{{ route('profile.edit') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.profile') }}
                    </a>

                {{-- DIVISION OFFICE ADMIN --}}
                @elseif(Auth::user()->role === 'division_office')
                    <a href="{{ route('admin.division') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.division_dashboard') }}
                    </a>
                    <a href="{{ route('profile.edit') }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:underline">
                        {{ __('messages.profile') }}
                    </a>
                @endif
            </div>

            {{-- Right side: user and logout --}}
            <div class="flex items-center space-x-4">
                <span class="text-sm text-gray-600 dark:text-gray-400">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-red-600 dark:text-red-400 hover:underline">
<<<<<<< HEAD
=======
=======
<div class="bg-green-900 text-white shadow">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-3">

        {{-- Left: Logo and Website Name --}}
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/your-logo.png') }}" alt="Logo" class="h-10 w-auto">
            <span class="text-xl font-bold">Colombo Municipal Council</span>
        </div>

        {{-- Hamburger (Mobile) --}}
        <div class="md:hidden relative" x-data="{ open: false }">
            <button @click="open = !open" class="focus:outline-none">
                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            {{-- Mobile Menu --}}
            <div x-show="open" class="absolute right-0 mt-2 w-48 bg-green-800 rounded shadow-md z-50 p-4 space-y-2 text-sm">
                {{-- role-based links --}}
                @if(Auth::user()->role === 'user')
                    <a href="{{ route('lodge-complaint') }}" class="block hover:underline">{{ __('messages.lodge_complaint') }}</a>
                    <a href="{{ route('complaint.history') }}" class="block hover:underline">{{ __('messages.complaint_history') }}</a>
                    <a href="{{ route('feedback') }}" class="block hover:underline">{{ __('messages.feedback') }}</a>
                    <a href="{{ route('profile.edit') }}" class="block hover:underline">{{ __('messages.profile') }}</a>
                @elseif(Auth::user()->role === 'super_admin')
                    <a href="{{ route('admin.manage') }}" class="block hover:underline">{{ __('messages.manage_admins') }}</a>
                    <a href="{{ route('admin.all-complaints') }}" class="block hover:underline">{{ __('messages.all_complaints') }}</a>
                    <a href="{{ route('admin.all-feedbacks') }}" class="block hover:underline">{{ __('messages.all_feedbacks') }}</a>
                @elseif(Auth::user()->role === 'env_police')
                    <a href="{{ route('admin.env') }}" class="block hover:underline">{{ __('messages.env_dashboard') }}</a>
                    <a href="{{ route('profile.edit') }}" class="block hover:underline">{{ __('messages.profile') }}</a>
                @elseif(Auth::user()->role === 'municipal')
                    <a href="{{ route('admin.municipal') }}" class="block hover:underline">{{ __('messages.municipal_dashboard') }}</a>
                    <a href="{{ route('profile.edit') }}" class="block hover:underline">{{ __('messages.profile') }}</a>
                @elseif(Auth::user()->role === 'division_office')
                    <a href="{{ route('admin.division') }}" class="block hover:underline">{{ __('messages.division_dashboard') }}</a>
                    <a href="{{ route('profile.edit') }}" class="block hover:underline">{{ __('messages.profile') }}</a>
                @endif
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block text-red-300 hover:underline">
>>>>>>> 341b4f5 (Frontend updates and layout improvements)
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
                        {{ __('messages.logout') }}
                    </button>
                </form>
            </div>
        </div>
<<<<<<< HEAD
    </div>
</nav>
=======
<<<<<<< HEAD
    </div>
</nav>
=======

        {{-- Desktop Menu --}}
        <div class="hidden md:flex items-center justify-between space-x-6">
            <div class="flex space-x-6">
                @if(Auth::user()->role === 'user')
                    <a href="{{ route('lodge-complaint') }}" class="text-sm font-medium hover:underline">{{ __('messages.lodge_complaint') }}</a>
                    <a href="{{ route('complaint.history') }}" class="text-sm font-medium hover:underline">{{ __('messages.complaint_history') }}</a>
                    <a href="{{ route('feedback') }}" class="text-sm font-medium hover:underline">{{ __('messages.feedback') }}</a>
                    <a href="{{ route('profile.edit') }}" class="text-sm font-medium hover:underline">{{ __('messages.profile') }}</a>
                @elseif(Auth::user()->role === 'super_admin')
                    <a href="{{ route('admin.manage') }}" class="text-sm font-medium hover:underline">{{ __('messages.manage_admins') }}</a>
                    <a href="{{ route('admin.all-complaints') }}" class="text-sm font-medium hover:underline">{{ __('messages.all_complaints') }}</a>
                    <a href="{{ route('admin.all-feedbacks') }}" class="text-sm font-medium hover:underline">{{ __('messages.all_feedbacks') }}</a>
                @elseif(Auth::user()->role === 'env_police')
                    <a href="{{ route('admin.env') }}" class="text-sm font-medium hover:underline">{{ __('messages.env_dashboard') }}</a>
                    <a href="{{ route('profile.edit') }}" class="text-sm font-medium hover:underline">{{ __('messages.profile') }}</a>
                @elseif(Auth::user()->role === 'municipal')
                    <a href="{{ route('admin.municipal') }}" class="text-sm font-medium hover:underline">{{ __('messages.municipal_dashboard') }}</a>
                    <a href="{{ route('profile.edit') }}" class="text-sm font-medium hover:underline">{{ __('messages.profile') }}</a>
                @elseif(Auth::user()->role === 'division_office')
                    <a href="{{ route('admin.division') }}" class="text-sm font-medium hover:underline">{{ __('messages.division_dashboard') }}</a>
                    <a href="{{ route('profile.edit') }}" class="text-sm font-medium hover:underline">{{ __('messages.profile') }}</a>
                @endif
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-sm">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-red-300 hover:underline">{{ __('messages.logout') }}</button>
                </form>
            </div>
        </div>

    </div>
</div>
>>>>>>> 341b4f5 (Frontend updates and layout improvements)
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
@endauth
