<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Complaint History
        </h2>
    </x-slot>

    <div class="py-12 px-6">
        @if($complaints->isEmpty())
            <p>You haven't submitted any complaints yet.</p>
        @else
            <ul class="space-y-4">
                @foreach($complaints as $complaint)
                    <li class="border p-4 rounded shadow bg-white dark:bg-gray-800">
                        <strong>Issue ID:</strong> {{ $complaint->issue_id }} <br>
                        <strong>Category:</strong> {{ ucfirst($complaint->category) }} <br>
                        <strong>Status:</strong> {{ ucfirst($complaint->status) }} <br>
                        <strong>Date:</strong> {{ $complaint->created_at->format('Y-m-d H:i') }}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</x-app-layout>
