<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('messages.manage_admins') }}
        </h2>
    </x-slot>

    <div class="px-6 py-8">
        <h3 class="text-lg font-bold mb-4">{{ __('messages.super_admin_panel') }}</h3>
        <p class="mb-6 text-sm text-gray-600 dark:text-gray-300">{{ __('messages.admin_panel_note') }}</p>

        <h4 class="text-md font-semibold mb-2">{{ __('messages.create_new_admin') }}</h4>
        <form method="POST" action="{{ route('admin.store') }}" class="mb-8">
            @csrf
            <input type="text" name="name" placeholder="{{ __('messages.full_name') }}"
                   class="w-full mb-2 border p-2 rounded" required>
            <input type="email" name="email" placeholder="{{ __('messages.email') }}"
                   class="w-full mb-2 border p-2 rounded" required>

            <select name="role" class="w-full mb-2 border p-2 rounded" required>
                <option value="">{{ __('messages.select_department') }}</option>
                <option value="env_police">{{ __('messages.env_police') }}</option>
                <option value="municipal">{{ __('messages.municipal') }}</option>
                <option value="division_office">{{ __('messages.division') }}</option>
            </select>

            <input type="password" name="password" placeholder="{{ __('messages.password') }}"
                   class="w-full mb-2 border p-2 rounded" required>

            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">
                {{ __('messages.create_admin') }}
            </button>
        </form>

        <h4 class="text-md font-semibold mb-2">{{ __('messages.existing_admins') }}</h4>
        @foreach($admins as $admin)
            <div class="bg-gray-100 dark:bg-gray-700 p-3 mb-2 flex justify-between items-center rounded">
                <div>
                    {{ $admin->name }} —
                    <span class="italic text-sm text-gray-500">{{ __('messages.roles.' . $admin->role) }}</span>
                </div>
                <div>
                    <a href="{{ route('admin.edit', $admin->id) }}" class="text-blue-600 hover:underline text-sm">
                        {{ __('messages.edit') }}
                    </a>
                    <form action="{{ route('admin.delete', $admin->id) }}" method="POST" class="inline-block">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline text-sm ml-2"
                                onclick="return confirm('{{ __('messages.confirm_delete') }}')">
                            {{ __('messages.delete') }}
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
