<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('messages.submit_feedback') }}
        </h2>
    </x-slot>

    <div class="py-12 px-6">
        @if(session('success'))
            <div class="text-green-600 mb-2">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('feedback.submit') }}">
            @csrf
            <label class="block mb-2 text-gray-700 dark:text-gray-300">
                {{ __('messages.feedback_note') }}
            </label>
            <textarea name="message" rows="5" class="w-full p-2 border rounded" placeholder="{{ __('messages.feedback_placeholder') }}" required></textarea>

            <button type="submit" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded">
                {{ __('messages.send_feedback') }}
            </button>
        </form>
    </div>
</x-app-layout>
