<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-68 h-screen transition-transform -translate-x-full sm:translate-x-0 p-3"
    aria-label="Sidebar">
    <div class="h-full px-3 py-3 overflow-y-auto bg-gray-100 rounded-xl">
        <a route="https://flowbite.com/" class="bg-white flex items-center justify-center rounded-xl px-3 py-4 mb-8">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap ">{{ config('app.name') }}
            </span>
        </a>
        <ul class="space-y-2 font-medium bg-white rounded-xl p-2 mb-2">
            <h6 class="text-xs text-gray-400 ms-5 mt-2 mb-4">MENU</h6>
            <div class="mt-3"></div>
            <x-sidebar.menu-item route="admin.dashboard" icon='fa-solid fa-house' title="Dashboard" />
        </ul>

        <ul class="space-y-2 font-medium bg-white rounded-xl px-2 py-3 mb-3">
            <h6 class="text-xs text-gray-400 ms-5 mt-2 mb-4">MANAJEMEN PENGGUNA</h6>
            <x-sidebar.menu-item route="" icon='fa-solid fa-house' title="Kelola Mahasiswa" />
            <x-sidebar.menu-item route="" icon='fa-solid fa-house' title="Kelola Dosen" />
            <x-sidebar.menu-item route="" icon='fa-solid fa-house' title="Kelola Admin" />
        </ul>

        <ul class="space-y-2 font-medium bg-white rounded-xl p-2 mb-3">
            <h6 class="text-xs text-gray-400 ms-5 mt-2 mb-4">MANAJEMEN LOMBA</h6>
            <x-sidebar.menu-item route="" icon='fa-solid fa-house' title="Kelola Kelompok" />
            <x-sidebar.menu-item route="" icon='fa-solid fa-house' title="Kelola Lomba" />
            <x-sidebar.menu-item route="" icon='fa-solid fa-house' title="Kelola Prestasi" />
        </ul>

        <ul class="space-y-2 font-medium bg-white rounded-xl p-2 mb-3">
            <h6 class="text-xs text-gray-400 ms-5 mt-2 mb-4">MASTER DATA</h6>
            <x-sidebar.menu-item route="" icon='fa-solid fa-house' title="Kelola Periode" />
            <x-sidebar.menu-item route="" icon='fa-solid fa-house' title="Kelola Program Studi" />
            <x-sidebar.menu-item route="" icon='fa-solid fa-house' title="Kelola Kompetensi" />
            <x-sidebar.menu-item route="admin.master.bidang-keahlian.index" icon='fa-solid fa-house'
                title="Kelola Keahlian" />
            <x-sidebar.menu-item route="" icon='fa-solid fa-house' title="Kelola Minat" />
        </ul>

        <ul class="space-y-2 font-medium bg-white rounded-xl p-2 mb-3">
            <h6 class="text-xs text-gray-400 ms-5 mt-2 mb-4">PENGATURAN</h6>
            <x-sidebar.menu-item route="" icon='fa-solid fa-house' title="Profil" />
            <x-sidebar.menu-item route="" icon='fa-solid fa-house' title="Log out" />
        </ul>
    </div>
</aside>
