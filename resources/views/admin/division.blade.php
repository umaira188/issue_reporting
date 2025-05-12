<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('messages.division_dashboard') }}
        </h2>
    </x-slot>

    <div class="p-6 bg-white dark:bg-gray-800 rounded shadow">
        {{-- 🔍 Filter Form --}}
        <form method="GET" class="mb-6 flex flex-wrap gap-4 items-end">
            <div>
                <label class="block text-sm">{{ __('messages.status') }}</label>
                <select name="status" class="border p-2 rounded">
                    <option value="">{{ __('messages.all') }}</option>
                    @foreach(['Received', 'Assigned', 'Work Started', 'In Progress', 'Completed', 'Closed'] as $status)
                        <option value="{{ $status }}" {{ request('status') === $status ? 'selected' : '' }}>
                            {{ __('messages.statuses.' . str_replace(' ', '_', strtolower($status))) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm">{{ __('messages.from_date') }}</label>
                <input type="date" name="from_date" value="{{ request('from_date') }}" class="border p-2 rounded" />
            </div>

            <div>
                <label class="block text-sm">{{ __('messages.to_date') }}</label>
                <input type="date" name="to_date" value="{{ request('to_date') }}" class="border p-2 rounded" />
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                    {{ __('messages.filter') }}
                </button>
                <a href="{{ route('admin.division') }}" class="ml-2 text-sm text-gray-500">
                    {{ __('messages.reset') }}
                </a>
            </div>
        </form>

        {{-- 📋 Complaints List --}}
        <h3 class="text-lg font-bold mb-4">{{ __('messages.division_complaints') }}</h3>

        @forelse($complaints as $complaint)
            <div class="mb-6 border-b pb-4">
                <strong>{{ $complaint->issue_id }}</strong> — 
                {{ __('messages.categories.' . $complaint->category) }} — 
                <span class="text-sm italic text-gray-600">
                    {{ __('messages.statuses.' . str_replace(' ', '_', strtolower($complaint->status))) }}
                </span>

                <p class="mt-1 text-sm text-gray-700">{{ $complaint->details }}</p>

                <a href="{{ route('admin.complaints.show', $complaint->id) }}" class="text-blue-600 hover:underline text-sm mt-2 inline-block">
                    {{ __('messages.view_details') }}
                </a>

                <form method="POST" action="{{ route('admin.update-status', $complaint->id) }}" class="mt-2">
                    @csrf
                    @method('PUT')
                    <div class="flex items-center gap-2">
                        <select name="status" class="border p-2 rounded">
                            @foreach(['Received', 'Assigned', 'Work Started', 'In Progress', 'Completed', 'Closed'] as $status)
                                <option value="{{ $status }}" {{ $complaint->status === $status ? 'selected' : '' }}>
                                    {{ __('messages.statuses.' . str_replace(' ', '_', strtolower($status))) }}
                                </option>
                            @endforeach
                        </select>

                        <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">
                            {{ __('messages.update') }}
                        </button>
                    </div>
                </form>
            </div>
        @empty
            <p class="text-gray-500">{{ __('messages.no_complaints_admin') }}</p>
        @endforelse
    </div>
</x-app-layout>
