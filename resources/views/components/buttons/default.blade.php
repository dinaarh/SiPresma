@props([
    'type' => 'button',
    'title' => 'Click Me',
    'color' => 'primary',
    'onclick' => '',
    'icon' => 'fa-solid fa-info-circle',
])


<button type="{{ $type }}" onclick="{{ $onclick }}"
    class="text-white bg-gradient-to-br from-primary to-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 font-medium rounded-full text-xs px-5 py-2.5 text-center">{{ $title }}
    <i class="ms-1 text-sm {{ $icon }}"></i></button>
