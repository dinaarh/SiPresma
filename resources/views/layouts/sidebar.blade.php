<div class="w-64 bg-gray-800 text-white h-full">
    <div class="p-4">
        <h2 class="text-2xl font-semibold">SIKAD POLINEMA</h2>
    </div>
    <nav>
        <ul class="space-y-2">
            @if(auth()->user()->role == 'admin')
                <li><a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 hover:bg-gray-700">Admin Dashboard</a></li>
                <li><a href="{{ route('admin.manage') }}" class="block px-4 py-2 hover:bg-gray-700">Manage Users</a></li>
            @elseif(auth()->user()->role == 'dosen')
                <li><a href="{{ route('teacher.dashboard') }}" class="block px-4 py-2 hover:bg-gray-700">Dosen Dashboard</a></li>
                <li><a href="{{ route('teacher.courses') }}" class="block px-4 py-2 hover:bg-gray-700">My Courses</a></li>
            @elseif(auth()->user()->role == 'mahasiswa')
                <li><a href="{{ route('student.dashboard') }}" class="block px-4 py-2 hover:bg-gray-700">Student Dashboard</a></li>
                <li><a href="{{ route('student.courses') }}" class="block px-4 py-2 hover:bg-gray-700">My Courses</a></li>
            @endif
        </ul>
    </nav>
</div>
