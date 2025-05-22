@props([
    'href' => '/',
    'icon' => 'fa-solid fa-circle-info',
    'title' => 'Default Title',
    'color' => 'gray-500',
    'activeClass' => 'text-primary border-l-4 border-primary',
    'inactiveClass' => 'text-gray-900 border-l-4 border-transparent',
])

@php
    $isActive = request()->url() === $href;
    $baseClasses = 'flex items-center p-2 transition-colors duration-200 ease-in-out rounded-r-lg group';
    $linkClasses = $isActive ? "{$baseClasses} {$activeClass}" : "{$baseClasses} {$inactiveClass} hover:bg-gray-100";
    $textClasses = $isActive ? 'text-primary' : "text-{$color}";
@endphp

<li>
    <a href="{{ $href }}" class="{{ $linkClasses }}"
        @if ($isActive) aria-current="page" @endif>
        <i class="mx-2 {{ $textClasses }} {{ $icon }}" aria-hidden="true"></i>
        <span class="ms-1 text-sm font-medium {{ $textClasses }}">{{ $title }}</span>
    </a>
</li>
