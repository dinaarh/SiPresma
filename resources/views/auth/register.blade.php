@extends('layouts.app')

@section('content')
    <div class="min-h-screen min-w-screen bg-primary">
        <a href="{{ route('home') }}" class="absolute bg-white/80 backdrop-blur-md text-sm rounded-lg px-3 py-1 m-3"><i
                class="fa-solid fa-arrow-left-long"></i> Kembali</a>
        <section class="h-screen w-full flex items-center justify-center">
            <div class="bg-white/80 backdrop-blur-md rounded-lg shadow-lg p-6 w-full max-w-lg">
                <h1 class="text-black text-lg font-semibold">Selamat datang di {{ config('app.name') }}</h1>
                <p class="text-gray-500 text-xs">Silakan daftar untuk melanjutkan!</p>
                <hr class="text-gray-300 my-4">
                <form id="form" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mb-6">
                        <x-forms.default-input id="nim" label="NIM" placeholder="Masukkan NIM" isRequired />
                        <x-forms.default-input id="nama" label="Nama Lengkap" placeholder="Masukkan Nama Lengkap"
                            isRequired />
                        <x-forms.default-input type="email" id="email" label="Email"
                            placeholder="Masukkan Nama Lengkap" isRequired />
                        <x-forms.default-input type="password" id="password" label="Password"
                            placeholder="Masukkan Password" isRequired />
                        <x-forms.select-input id="program_studi" label="Program Studi" :data="$program_studis" isRequired />
                        <x-forms.select-input id="lokasi_preferensi" label="Lokasi Preferensi" :data="$lokasi_preferensis"
                            isRequired />
                    </div>
                    <x-buttons.default type="submit" title="Register" color="primary"
                        icon="fa-solid fa-arrow-right-to-bracket" class="w-full" />
                </form>
                <hr class="text-gray-300 my-4">
                <div class="text-center">
                    <p class="text-gray-500 text-xs">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-primary font-semibold">Masuk Sekarang</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $("#form").validate({
                rules: {
                    nim: {
                        required: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    nama: {
                        required: true,
                        minlength: 3,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    program_studi: {
                        required: true
                    },
                    lokasi_preferensi: {
                        required: true
                    },
                    password: {
                        required: true,
                        minlength: 8,
                        maxlength: 50
                    }
                },
                messages: {
                    nim: {
                        required: "NIM wajib diisi.",
                        minlength: "NIM minimal 10 karakter.",
                        maxlength: "NIM maksimal 10 karakter."
                    },
                    nama: {
                        required: "Nama lengkap wajib diisi.",
                        minlength: "Nama lengkap minimal 3 karakter."
                    },
                    email: {
                        required: "Email wajib diisi.",
                        email: "Format email tidak valid."
                    },
                    program_studi: {
                        required: "Program studi wajib dipilih."
                    },
                    lokasi_preferensi: {
                        required: "Lokasi preferensi wajib dipilih."
                    },
                    password: {
                        required: "Password wajib diisi.",
                        minlength: "Password minimal 8 karakter.",
                        maxlength: "Password maksimal 50 karakter."
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function(response) {
                            if (response.status) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Register Berhasil',
                                    text: response.message,
                                }).then(function() {
                                    window.location = response.redirect;
                                });
                            } else {
                                $('.error-text, .invalid-feedback').text('');
                                $('.is-invalid').removeClass('is-invalid');
                                $.each(response.msgField, function(prefix, val) {
                                    $('#error-' + prefix).text(val[0]);

                                    const $field = $('#' + prefix);
                                    if ($field.length) {
                                        $field.addClass('is-invalid');
                                    } else {
                                        $('[name="' + prefix + '"]').addClass(
                                            'is-invalid');
                                    }
                                });
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Register Gagal',
                                    text: response.message
                                });
                            }
                        }
                    });
                    return false;
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });

            $('#form input').on('input', function() {
                const fieldId = $(this).attr('id');
                $('#error-' + fieldId).text('');
                $(this).removeClass('is-invalid');
            });

            $('#program_studi, #lokasi_preferensi').on('change', function() {
                const fieldId = $(this).attr('id');
                $('#error-' + fieldId).text('');
                $(this).removeClass('is-invalid');
            });
        });
    </script>
@endpush
