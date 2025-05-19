@extends('layouts.app')

@section('content')
<div class="flex">
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <div class="flex-1 p-6">
        <!-- Header -->
        @include('layouts.header')

        <!-- Dashboard Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            <x-stat-card title="Web Design" status="Upcoming Course" progress="75" />
            <x-stat-card title="3D Design" status="In Progress Course" progress="50" />
            <x-stat-card title="Content Creator" status="Completed Course" progress="25" />
        </div>

        <!-- Learning Activity -->
        <x-learning-activity />

        <!-- Goal Progress & Upgrade Banner -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <x-goal-progress goalProgress="70" />
            <x-upgrade-banner />
        </div>

        <!-- Offline Course -->
        <x-offline-course />
    </div>
</div>
@endsection
