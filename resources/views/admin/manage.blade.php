<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Super Admin Panel</h2>

    <p class="mb-6">You can manage admins from here.</p>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <h3 class="text-lg font-semibold mb-2">Create a New Admin</h3>

    <form action="{{ route('admin.create') }}" method="POST" class="mb-6">
        @csrf
        <input type="text" name="name" placeholder="Full Name" required class="border p-2 w-full mb-2">
        <input type="email" name="email" placeholder="Email" required class="border p-2 w-full mb-2">
        <select name="role" class="border p-2 w-full mb-2">
            <option value="env_police">Environmental Police</option>
            <option value="municipal">Municipal Council</option>
            <option value="division_office">Division Office</option>
        </select>
        <input type="password" name="password" placeholder="Password" required class="border p-2 w-full mb-2">
        <button class="bg-indigo-500 text-white px-4 py-2 rounded">Create Admin</button>
    </form>

    <h3 class="text-lg font-semibold mb-2">Existing Admins</h3>
    <ul>
        @foreach($admins as $admin)
            <li class="mb-1">👤 {{ $admin->name }} ({{ $admin->role }})</li>
        @endforeach
    </ul>
</x-app-layout>
