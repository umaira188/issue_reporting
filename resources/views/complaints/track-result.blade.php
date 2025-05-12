<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('messages.complaint_details') }}
        </h2>
    </x-slot>

    <div class="max-w-3xl mx-auto mt-6 p-4 bg-white dark:bg-gray-800 rounded shadow">
        <h3 class="text-lg font-bold mb-2">{{ __('messages.issue_id') }}: {{ $complaint->issue_id }}</h3>
        <p><strong>{{ __('messages.category') }}:</strong> {{ ucfirst($complaint->category) }}</p>
        <p><strong>{{ __('messages.address') }}:</strong> {{ $complaint->address }}</p>
        <p><strong>{{ __('messages.status') }}:</strong> 
            <span class="text-indigo-600">{{ $complaint->status }}</span>
        </p>
        <p><strong>{{ __('messages.details') }}:</strong> {{ $complaint->details }}</p>

        <h4 class="mt-4 font-semibold">{{ __('messages.status_timeline') }}:</h4>
        <ul class="pl-4 border-l-2 border-indigo-500 mt-2">
            @foreach($complaint->statusLogs as $log)
                <li class="mb-2">
                    <span class="font-semibold text-indigo-600">{{ $log->status }}</span>
                    <span class="text-sm text-gray-500">
                        ({{ \Carbon\Carbon::parse($log->changed_at)->timezone('Asia/Colombo')->format('d M Y, h:i A') }})
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
