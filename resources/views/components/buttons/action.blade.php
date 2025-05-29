@props([
    'route_prefix' => null,
    'id' => null,
    'isDetailed' => false,
])

<div class="inline-flex rounded-md shadow-xs" role="group">
    <button type="button"
        onclick="modalAction('{{ route($route_prefix . '.show', $id) }}')"
        class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-white bg-blue-500 rounded-s-lg cursor-pointer"
        @if (!$isDetailed) disabled @endif>
        <i class="fa-solid fa-receipt me-2"></i>
        Detail
    </button>

    <button type="button"
        onclick="modalAction('{{ route($route_prefix . '.edit', $id) }}')"
        class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-white bg-yellow-500 cursor-pointer">
        <i class="fa-solid fa-pencil me-2"></i>
        Edit
    </button>

    <button type="button"
        onclick="modalAction('{{ route($route_prefix . '.delete', $id) }}')"
        class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-white bg-red-500 rounded-e-lg cursor-pointer">
        <i class="fa-solid fa-trash-can me-2"></i>
        Hapus
    </button>
</div>
