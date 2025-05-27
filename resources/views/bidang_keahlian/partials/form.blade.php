<form id="{{ $formId }}" method="POST" action="{{ $action }}" class="p-4 md:p-5">
    @csrf

    @if (in_array(strtoupper($method), ['PUT', 'PATCH', 'DELETE']))
        @method($method)
    @endif

    <div class="grid gap-4 mb-4 grid-cols-2">
        <x-forms.default-input id="bidang_keahlian_nama" label="Nama" placeholder="Masukkan Nama Bidang Keahlian"
            value="{{ $bidang_keahlian->bidang_keahlian_nama ?? '' }}" isRequired />
    </div>
    <button type="submit"
        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <i class="{{ $buttonIcon }} me-2"></i>
        {{ $buttonText }}
    </button>
</form>
