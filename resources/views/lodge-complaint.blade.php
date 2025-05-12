<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('messages.lodge_complaint') }}
        </h2>
    </x-slot>

    <div class="py-12 px-6">
        <form action="{{ route('submit-complaint') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Category (Issue Type) -->
            <label class="block mb-1">{{ __('messages.category') }}</label>
            <select name="issueType" required class="block mb-4 w-full border p-2 rounded">
                <option value="">{{ __('messages.select_issue_type') }}</option>
                <option value="road">{{ __('messages.categories.road') }}</option>
                <option value="lighting">{{ __('messages.categories.lighting') }}</option>
                <option value="water">{{ __('messages.categories.water') }}</option>
                <option value="garbage">{{ __('messages.categories.garbage') }}</option>
            </select>

            <!-- Address -->
            <label class="block mb-1">{{ __('messages.address') }}</label>
            <p class="text-sm text-gray-500 mb-1">{{ __('messages.language_note') }}</p>
            <input type="text" name="address" required class="block mb-4 w-full border p-2 rounded">

            <!-- Details -->
            <label class="block mb-1">{{ __('messages.details') }}</label>
             <p class="text-sm text-gray-500 mb-1">{{ __('messages.language_note') }}</p>
            <textarea name="details" required class="block mb-4 w-full border p-2 rounded"></textarea>

            <!-- Upload Image -->
            <label class="block mb-1">{{ __('messages.upload_image') }}</label>
            <div class="flex items-center gap-4 mb-4">
                <label for="imageUpload" class="bg-blue-600 text-white px-4 py-2 rounded cursor-pointer">
                    {{ __('messages.choose_file') }}
                </label>
                <span id="file-name" class="text-sm text-gray-300">{{ __('messages.no_file_chosen') }}</span>
                <input type="file" id="imageUpload" name="image" accept="image/*" class="hidden" onchange="updateFileName(this)">
            </div>

            <!-- Submit -->
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                {{ __('messages.submit') }}
            </button>
        </form>
    </div>

    <script>
        function updateFileName(input) {
            const fileNameSpan = document.getElementById('file-name');
            fileNameSpan.textContent = input.files.length > 0
                ? input.files[0].name
                : "{{ __('messages.no_file_chosen') }}";
        }
    </script>
</x-app-layout>
