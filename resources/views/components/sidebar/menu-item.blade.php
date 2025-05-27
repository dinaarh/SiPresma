@props([
    'route' => 'dashboard',
    'currentRoute' => null,
    'icon' => 'fa-solid fa-circle-info',
    'title' => 'Default Title',
    'color' => 'gray-500',
    'activeClass' => 'text-primary border-l-4 border-primary',
    'inactiveClass' => 'text-gray-900 border-l-4 border-transparent',
])

@php
    $route = empty($route) ? 'dashboard' : $route;
    $isActive = request()->routeIs($route);
@endphp


<a href="{{ route($route) }}" @class([
    'flex items-center p-2 transition-colors duration-200 ease-in-out rounded-r-lg group',
    $activeClass => $isActive,
    "{$inactiveClass} hover:bg-gray-100" => !$isActive,
]) @if ($isActive) aria-current="page" @endif>
    <i class="mx-2 {{ $icon }} @if ($isActive) text-primary @else text-{{ $color }} @endif"
        aria-hidden="true"></i>
    <span
        class="ms-1 text-sm font-medium @if ($isActive) text-primary @else text-{{ $color }} @endif">{{ $title }}</span>
</a>
