<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('messages.track_your_complaint') }}
        </h2>
    </x-slot>

    <div class="max-w-md mx-auto mt-10">
        @if(session('error'))
            <div class="bg-red-200 text-red-700 p-2 mb-4 rounded">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('complaint.track') }}">
            @csrf
            <label for="issue_id" class="block font-medium mb-2">{{ __('messages.enter_issue_id') }}</label>
            <input type="text" name="issue_id" id="issue_id" required class="w-full p-2 border rounded mb-4">

            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">
                {{ __('messages.track_complaint_button') }}
            </button>
        </form>
    </div>
</x-app-layout>
