@props([
    'id' => 'default-search',
    'placeholder' => 'Search...',
])

<div class="max-w-md mx-auto">
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-5 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
        </div>
        <input type="search" id="{{ $id }}" name="{{ $id }}"
            value="{{ old($id) }}"
            class="block w-full pe-5 ps-13 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
            placeholder="{{ $placeholder }}" />
    </div>
</div>
