<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('messages.complaint_details') }}
        </h2>
    </x-slot>

    <div class="p-6 bg-white dark:bg-gray-800 shadow rounded">
        <p><strong>{{ __('messages.issue_id') }}:</strong> {{ $complaint->issue_id }}</p>
        <p><strong>{{ __('messages.category') }}:</strong> {{ __('messages.categories.' . $complaint->category) }}</p>
        <p><strong>{{ __('messages.address') }}:</strong> {{ $complaint->address }}</p>
        <p><strong>{{ __('messages.status') }}:</strong> {{ __('messages.statuses.' . str_replace(' ', '_', strtolower($complaint->status))) }}</p>
        <p><strong>{{ __('messages.submitted_by') }}:</strong> {{ $complaint->user->name }}</p>
        <p><strong>{{ __('messages.details') }}:</strong> {{ $complaint->details }}</p>

        @if($complaint->image)
            <p><strong>{{ __('messages.image') }}:</strong></p>
            <img src="{{ asset('storage/' . $complaint->image) }}" alt="Complaint Image" class="max-w-xs rounded shadow">
        @endif

        <div class="mt-4">
            <a href="{{ url()->previous() }}" class="text-blue-600 hover:underline">← {{ __('messages.back') }}</a>
        </div>
    </div>
</x-app-layout>
