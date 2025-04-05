<h2 class="text-xl font-bold mb-4">Submit Feedback</h2>

@if(session('success'))
    <div class="text-green-600 mb-2">{{ session('success') }}</div>
@endif

<form method="POST" action="{{ route('feedback.submit') }}">
    @csrf
    <textarea name="message" rows="5" class="w-full p-2 border rounded" placeholder="Write your feedback here..." required></textarea>
    <button type="submit" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded">Send Feedback</button>
</form>
