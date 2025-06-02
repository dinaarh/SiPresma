@props([
    'headers' => [],
    'searchPlaceholder' => 'Search...',
    'dataRoute' => '',
    'tableId' => 'table',
    'searchId' => 'datatable-search',
])

<table id="{{ $tableId }}" class="table-auto w-full text-left border-collapse border border-gray-200">
    <thead class="bg-gray-100 text-gray-700 uppercase text-sm font-medium">
        <tr>
            @foreach ($headers as $header)
                <th class="px-4 py-3">
                    @if ($header['sortable'] ?? true)
                        <span class="flex items-center gap-1">
                            {{ $header['title'] }}
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    @else
                        {{ $header['title'] }}
                    @endif
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody class="text-gray-800">
        {{ $slot }}
    </tbody>
</table>


@push('js')
    <script>
        $(document).ready(function() {
            console.log("Checking for {{ $tableId }} and DataTable...");
            if (document.getElementById("{{ $tableId }}") && typeof simpleDatatables.DataTable !==
                'undefined') {
                console.log("Initializing DataTable...");
                try {
                    window.dataTable = new simpleDatatables.DataTable("#{{ $tableId }}", {
                        searchable: false,
                        perPage: 10,
                        perPageSelect: false,
                        nextPrev: true,
                        columns: [
                            @foreach ($headers as $index => $header)
                                {
                                    select: {{ $index }},
                                    sortable: {{ $header['sortable'] ?? true ? 'true' : 'false' }}
                                },
                            @endforeach
                        ],
                        labels: {
                            placeholder: "Cari...",
                            perPage: "entri per halaman",
                            noRows: "Tidak ada entri ditemukan",
                            info: "Menampilkan {start} sampai {end} dari {rows} entri",
                            noResults: "Tidak ada hasil yang cocok dengan pencarian Anda"
                        }
                    });

                    $('#datatable-search').on('input', function() {
                        dataTable.search($(this).val());
                    });
                } catch (error) {
                    console.error("DataTable initialization failed:", error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Gagal menginisialisasi tabel. Silakan coba lagi.'
                    });
                }
            } else {
                console.error("Table or DataTable library not found!");
            }

            @if ($dataRoute)
                window.reloadDataTable = function() {
                    console.log("Refreshing DataTable data...");

                    $.ajax({
                        url: '{{ $dataRoute }}',
                        type: 'GET',
                        success: function(response) {
                            if (response.status && window.dataTable) {
                                const newData = response.data.map(item => [
                                    @foreach ($headers as $header)
                                        @if (isset($header['key']))
                                            item.{{ $header['key'] }},
                                        @endif
                                    @endforeach
                                ]);

                                window.dataTable.data = newData;
                                window.dataTable.refresh();

                                console.log("DataTable refreshed successfully!");
                            }
                        },
                        error: function(xhr) {
                            console.error('Error refreshing table:', xhr);
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: 'Gagal memuat ulang data tabel.'
                            });
                        }
                    });
                };
            @endif
        });
    </script>
@endpush
