@props([
    'id' => 'default-input',
    'label' => 'Default Label',
    'placeholder' => 'Enter text...',
    'type' => 'text',
    'value' => '',
    'disabled' => false,
    'isRequired' => false,
])

<div class="form-group">
    <label for="{{ $id }}" class="block mb-1 text-sm font-medium text-gray-900">{{ $label }}</label>
    <input type="text" id="{{ $id }}" name="{{ $id }}" placeholder="{{ $placeholder }}"
        value="{{ old($id, $value) }}" @if ($disabled) disabled @endif
        @if ($isRequired) required @endif
        class="w-full rounded-md bg-gray-50 border border-gray-300 text-sm text-gray-900 placeholder-gray-400 px-3 py-2 transition-all focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
    <span id="error-{{ $id }}" class="error-text text-red-500"></span>
</div>
