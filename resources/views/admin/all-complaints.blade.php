<x-app-layout>
    <h2 class="text-xl font-bold mb-4">{{ __('messages.all_complaints') }}</h2>

    @if($complaints->isEmpty())
        <p>{{ __('messages.no_complaints_found') }}</p>
    @else
        <ul class="space-y-4">
            @foreach($complaints as $complaint)
                <li class="p-4 border rounded shadow">
                    <strong>{{ __('messages.issue_id') }}:</strong> {{ $complaint->issue_id }} <br>
                    <strong>{{ __('messages.category') }}:</strong> {{ __('messages.categories.' . $complaint->category) }} <br>
                    <strong>{{ __('messages.status') }}:</strong> {{ __('messages.statuses.' . \Illuminate\Support\Str::slug($complaint->status, '_')) }} <br>
                    <strong>{{ __('messages.user') }}:</strong> {{ $complaint->user->name ?? 'N/A' }} <br>
                    <strong>{{ __('messages.date') }}:</strong> {{ $complaint->created_at->format('Y-m-d H:i') }}
                </li>
            @endforeach
        </ul>
    @endif
</x-app-layout>
