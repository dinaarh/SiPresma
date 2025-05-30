@extends('layouts.app')

@section('content')
    <div class="min-h-screen min-w-screen bg-primary">
        <a href="{{ route('home') }}" class="absolute bg-white text-sm rounded-lg px-3 py-1 m-3"><i
                class="fa-solid fa-arrow-left-long"></i> Kembali</a>
        <section class="h-screen w-full flex items-center justify-center">
            <div class="bg-white/80 backdrop-blur-md rounded-lg shadow-lg p-6 w-full max-w-sm">
                <h1 class="text-black text-lg font-semibold">Selamat datang di {{ config('app.name') }}</h1>
                <p class="text-gray-500 text-xs">Silakan masuk untuk melanjutkan!</p>
                <hr class="text-gray-300 my-4">
                <form id="form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-2 mb-6">
                        <x-forms.default-input id="identifier" label="NIM / NIP" placeholder="Masukkan NIM atau NIP"
                            isRequired />
                        <x-forms.default-input type="password" id="password" label="Password"
                            placeholder="Masukkan Password" isRequired />
                    </div>
                    <x-buttons.default type="submit" title="Login" color="primary"
                        icon="fa-solid fa-arrow-right-to-bracket" class="w-full" />
                </form>
                <hr class="text-gray-300 my-4">
                <div class="text-center">
                    <p class="text-gray-500 text-xs">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="text-primary font-semibold">Daftar Sekarang </a>
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
                    identifier: {
                        required: true,
                        minlength: 10,
                        maxlength: 18
                    },
                    password: {
                        required: true,
                        minlength: 8,
                        maxlength: 50
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
                                    title: 'Login Berhasil',
                                    text: response.message,
                                }).then(function() {
                                    window.location = response.redirect;
                                });
                            } else {
                                $('.error-text').text('');
                                $.each(response.msgField, function(prefix, val) {
                                    $('#error-' + prefix).text(val[0]);
                                });
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Login Gagal',
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
                    element.closest('.input-group').append(error);
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
        });
    </script>
@endpush
