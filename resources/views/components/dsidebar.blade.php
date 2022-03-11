<div class="wrapper flex min-h-screen">
    <div class="bg-white text-gray-300 poppins flex flex-col justify-between w-2/6 items-start">
        <div class="flex flex-col min-w-full px-4">
            <div class="brand uppercase flex font-bold text-xl w-full justify-start p-6">
                <a class=" text-blue-800" href="/dashboard">
                    Maulana
                </a>
            </div>
            <div class="side-menu">
                <ul class="flex flex-col items-start p-4 pl-2 text-gray-600 font-semibold capitalize">
                    <span class="px-5 pb-4">Menu</span>
                    <a href="/dashboard" class="rounded-lg w-full py-2">
                        <li class="flex p-4 rounded-lg {{ Request::is('dashboard') ? 'bg-blue-800 text-white' : '' }} ">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            <span class="pl-2">Dashboard</span>
                        </li>
                    </a>
                    <a href="{{ route('students.index') }}" class="rounded-lg w-full py-2">
                        <li class="flex p-4 rounded-lg {{ Request::is('dashboard/students*') ? 'bg-blue-800 text-white' : '' }} ">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                            <span class="pl-2">Siswa</span>
                        </li>
                    </a>
                    <a href="{{ route('officers.index') }}" class="rounded-lg w-full py-2">
                        <li class="flex p-4 rounded-lg {{ Request::is('dashboard/officers*') ? 'bg-blue-800 text-white' : '' }} ">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="pl-2">Petugas</span>
                        </li>
                    </a>
                    <a href="{{ route('classes.index') }}" class="rounded-lg w-full py-2">
                        <li class="flex p-4 rounded-lg {{ Request::is('dashboard/classes*') ? 'bg-blue-800 text-white' : '' }} ">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <span class="pl-2">Kelas</span>
                        </li>
                    </a>
                    <a href="{{ route('payments.index') }}" class="rounded-lg w-full py-2">
                        <li class="flex p-4 rounded-lg {{ Request::is('dashboard/payments*') ? 'bg-blue-800 text-white' : '' }} ">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <span class="pl-2">Pembayaran</span>
                        </li>
                    </a>
                </ul>
            </div>

        </div>
        <div class="flex flex-col w-full bg-gray-200 text-gray-600">
            <div class="">
                <a class="flex items-center p-2" href="{{ route('dashboard.profile' , auth()->user()->identifier)}}">
                    <div class="profile-image pr-4">
                        <img class="rounded-full w-8 h-8" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="profile capitalize">
                        <div class="profile-menu flex flex-col">
                            <span class="">{{ auth()->user()->username }}</span>
                            <span>View Profile</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{ $slot }}
</div>
