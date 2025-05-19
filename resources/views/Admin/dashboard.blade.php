@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('username', 'Admin User')
@section('user_id', '123456 / Admin')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Admin Dashboard</h2>
        <p>Ini adalah dashboard untuk Admin. Di sini Anda bisa mengelola data mahasiswa, dosen, dan lain-lain.</p>
    </div>
@endsection
