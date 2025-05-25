@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <div class="flex">
    <!-- Sidebar -->
    <div class="w-64 h-screen fixed top-0 left-0 z-40">
        @include('layouts.sidebar')
    </div>

    <div class="flex-1 p-6 space-y-4 ml-64"> <!-- Tambahkan margin-left untuk menghindari sidebar menutupi konten -->
        <!-- Header -->
        @include('layouts.header') 

        <x-offline-course/>

        <!-- input form mahasiswa -->
        <x-inputDataMahasiswa />
    </div>
</div>
@endsection
</body>
</html>