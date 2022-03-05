<x-dmain>
    <x-dtop>
        Dashboard
    </x-dtop>
    <div class="grid grid-cols-12 gap-4 py-8">
        <div class="p-5 col-span-3  flex items-center bg-white rounded-xl">
            <div class="image-students-logo p-2 bg-violet-400 rounded-lg">
                <svg class="w-6 h-6" fill="none" stroke="#fff" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
            </div>
            <div class="description pl-4">
                <div class="profile-menu flex flex-col capitalize">
                    <span class="text-gray-600">Siswa</span>
                    <span class="font-semibold">{{ $totalStudents }}</span>
                </div>
            </div>
        </div>
        <div class="p-5 col-span-3 flex items-center bg-white rounded-xl">
            <div class="image-students-logo p-2 bg-blue-400 rounded-lg">
                <svg class="w-6 h-6" fill="none" stroke="#fff" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
            </div>
            <div class="description pl-4">
                <div class="profile-menu flex flex-col capitalize">
                    <span class="text-gray-600">Pembayaran</span>
                    <span class="font-semibold">{{ $totalPayments }}</span>
                </div>
            </div>
        </div>
        <div class="p-5 col-span-3 flex items-center bg-white rounded-xl">
            <div class="image-students-logo p-2 bg-green-400 rounded-lg">
                <svg class="w-6 h-6" fill="none" stroke="#fff" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
            <div class="description pl-4">
                <div class="profile-menu flex flex-col capitalize">
                    <span class="text-gray-600">Petugas</span>
                    <span class="font-semibold">{{ $totalOfficers }}</span>
                </div>
            </div>
        </div>
        <div class="p-5 col-span-3 flex justify-center items-center bg-white rounded-xl">
            <a class="flex items-center p-2" href="/profile/{{ auth()->user()->identifier }}">
                <div class="profile-image pr-4 flex-shrink-0">
                    <img class="rounded-full w-12 h-12"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </div>
                <div class="profile capitalize">
                    <div class="profile-menu flex flex-col">
                        <span
                            class="font-semibold text-xl text-gray-600">{{ auth()->user()->username }}</span>
                        <span>View Profile</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="chart-wrapper pt-4 rounded-lg">
        <div class="grid grid-cols-12 space-x-4">
            <div class="card col-span-8 h-fit bg-white">

            </div>
            <div class="p-5 col-span-4 h-fit flex flex-col justify-center items-start bg-white rounded-xl">
                <div class="recent-title capitalize text-gray-600 font-semibold text-xl p-4">
                    <span>Recent User</span>
                </div>
                @foreach ($recentUsers as $recentUser )
                <a class="flex items-center p-2" href="/profile/{{ $recentUser->identifier }}">
                    <div class="profile-image pr-4 flex-shrink-0">
                        <img class="rounded-full w-12 h-12"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </div>
                    <div class="profile capitalize">
                        <div class="profile-menu flex flex-col">
                            <span
                                class="font-semibold text-xl text-gray-600">{{ $recentUser->username }}</span>
                            <span>View Profile</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-dmain>

