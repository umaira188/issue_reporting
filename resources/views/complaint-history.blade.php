<h2 class="text-xl font-bold mb-4">Your Complaint History</h2>

@if($complaints->isEmpty())
    <p>You haven't submitted any complaints yet.</p>
@else
    <ul class="space-y-4">
        @foreach($complaints as $complaint)
            <li class="border p-4 rounded shadow">
                <strong>Issue ID:</strong> {{ $complaint->issue_id }} <br>
                <strong>Category:</strong> {{ ucfirst($complaint->category) }} <br>
                <strong>Status:</strong> {{ ucfirst($complaint->status) }} <br>
                <strong>Date:</strong> {{ $complaint->created_at->format('Y-m-d H:i') }}
            </li>
        @endforeach
    </ul>
@endif
