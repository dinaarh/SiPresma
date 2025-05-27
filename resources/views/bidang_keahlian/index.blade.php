@extends('layouts.app')

@section('content')
    <section class="bg-white flex justify-end gap-2 p-4 rounded-xl mb-2">
        <x-buttons.default type="button" title="Export PDF" color="primary" onclick="" />
        <x-buttons.default type="button" title="Export Excel" color="primary" onclick="" />
        <x-buttons.default type="button" title="Import Excel" color="primary" onclick="" />
        <x-buttons.default type="button" title="Tambah Baru" color="primary"
            onclick="modalAction('{{ route('admin.master.bidang-keahlian.create') }}')" />
    </section>
    <section class="bg-white flex justify-end p-4 rounded-xl mb-2">
        <x-search-input id="datatable-search" placeholder="Cari Bidang Keahlian..." />
    </section>
    <section class="overflow-x-auto bg-white px-4 pb-4 rounded-xl">
        <table id="table">
            <thead class="bg-transparent">
                <tr>
                    <th>
                        <span class="flex items-center">
                            No
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Id
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Nama Bidang Keahlian
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Aksi
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bidang_keahlians as $bidang_keahlian)
                    <tr>
                        <td class="whitespace-nowrap">{{ $loop->iteration }}</td>
                        <td>{{ $bidang_keahlian->bidang_keahlian_id }}</td>
                        <td>{{ $bidang_keahlian->bidang_keahlian_nama }}</td>
                        <td>
                            <x-buttons.action route_prefix="admin.master.bidang-keahlian" id="{{ $bidang_keahlian->bidang_keahlian_id }}" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <div id="modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div id="modal-content" class="relative bg-white rounded-lg shadow-sm ">
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        #modal.show {
            display: flex !important;
        }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            console.log("Checking for table_user and DataTable...");
            if (document.getElementById("table") && typeof simpleDatatables.DataTable !== 'undefined') {
                console.log("Initializing DataTable...");
                try {
                    const dataTable = new simpleDatatables.DataTable("#table", {
                        searchable: false,
                        perPage: 10,
                        perPageSelect: false,
                        nextPrev: true,
                        columns: [{
                                select: 0,
                                sortable: true
                            },
                            {
                                select: 1,
                                sortable: true
                            },
                            {
                                select: 2,
                                sortable: true
                            },
                            {
                                select: 3,
                                sortable: false
                            },
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

            // Modal for adding/editing users
            window.modalAction = function(url) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        console.log(url);
                        $('#modal-content').html(response);
                        $('#modal').addClass('show');
                    },
                    error: function(xhr) {
                        console.error('Error loading modal content:', xhr);
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Gagal memuat form. Silakan coba lagi.'
                        });
                    }
                });
            };

            $(document).off('click', '#modal-close').on('click', '#modal-close', function() {
                $('#modal').removeClass('show');
                $('#modal-content').html('');
            });

            $(document).off('click', '#modal').on('click', '#modal', function(e) {
                if (e.target.id === 'modal') {
                    $('#modal').removeClass('show');
                    $('#modal-content').html('');
                }
            });
        });
    </script>
@endpush
