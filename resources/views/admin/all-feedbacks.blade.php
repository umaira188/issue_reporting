<x-app-layout>
    <h2 class="text-xl font-bold mb-4">{{ __('messages.all_feedbacks') }}</h2>

    @if($feedbacks->isEmpty())
        <p>{{ __('messages.no_feedback_yet') }}</p>
    @else
        <ul class="space-y-4">
            @foreach($feedbacks as $feedback)
                <li class="p-4 border rounded shadow">
                    <strong>{{ __('messages.user') }}:</strong> {{ $feedback->user->name ?? __('messages.unknown') }} <br>
                    <strong>{{ __('messages.message') }}:</strong>
                    <p>{{ $feedback->message }}</p>
                    <span class="text-sm text-gray-500">{{ __('messages.submitted') }}: {{ $feedback->created_at->format('Y-m-d H:i') }}</span>
                </li>
            @endforeach
        </ul>
    @endif
</x-app-layout>
