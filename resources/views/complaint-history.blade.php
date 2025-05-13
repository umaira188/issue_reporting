<x-app-layout> 
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('messages.complaint_history') }}
        </h2> 
    </x-slot>

    <div class="py-12 px-6">
        @forelse($complaints as $complaint)
            <div class="mb-6 p-4 border rounded bg-white dark:bg-gray-800 shadow">
<<<<<<< HEAD
=======
=======
     
 <div class="py-12 px-6 bg-white text-black rounded shadow-md">
    <div class="py-12 px-6 bg-white text-black">
        @forelse($complaints as $complaint)
            <div class="mb-6 p-4 border rounded bg-green shadow">
>>>>>>> 341b4f5 (Frontend updates and layout improvements)
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
                <h3 class="font-semibold text-lg mb-2">{{ __('messages.issue_id') }}: {{ $complaint->issue_id }}</h3>
                <p><strong>{{ __('messages.category') }}:</strong> {{ __('messages.categories.' . $complaint->category) }}</p>
                <p><strong>{{ __('messages.current_status') }}:</strong> 
                    {{ __('messages.statuses.' . \Illuminate\Support\Str::slug($complaint->status, '_')) }}
                </p>
                <p><strong>{{ __('messages.submitted_at') }}:</strong> 
                    {{ \Carbon\Carbon::parse($complaint->created_at)->timezone('Asia/Colombo')->format('Y-m-d H:i') }}
                </p>

                <h4 class="font-bold mt-4 mb-2">{{ __('messages.status_timeline') }}</h4>
                <ul class="pl-4 border-l-2 border-indigo-500">
                    @forelse($complaint->statusLogs as $log)
                        <li class="mb-2">
                            <span class="text-indigo-600 font-semibold">
                                {{ __('messages.statuses.' . \Illuminate\Support\Str::slug($log->status, '_')) }}
                            </span>
                            <span class="text-sm text-gray-500">
                                — {{ \Carbon\Carbon::parse($log->changed_at)->timezone('Asia/Colombo')->format('d M Y, h:i A') }}
                            </span>
                        </li>
                    @empty
                        <li class="text-gray-500 text-sm">{{ __('messages.no_timeline') }}</li>
                    @endforelse
                </ul>
            </div>
        @empty
<<<<<<< HEAD
            <p class="text-gray-600 dark:text-gray-300">{{ __('messages.no_complaints') }}</p>
=======
<<<<<<< HEAD
            <p class="text-gray-600 dark:text-gray-300">{{ __('messages.no_complaints') }}</p>
=======
            <p class="text-gray-600">{{ __('messages.no_complaints') }}</p>
>>>>>>> 341b4f5 (Frontend updates and layout improvements)
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)
        @endforelse
    </div>
</x-app-layout>
