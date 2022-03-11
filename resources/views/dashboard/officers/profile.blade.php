<x-dmain background="bg-white">
    <x-dtop>
        Profile
    </x-dtop>
    <div class="profile-wrapper p-4 space-y-8">
        <div class="flex items-center justify-between">
            <div class="profile flex items-center">
                <div class="image flex-shrink-0 pr-4">
                    <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="profile-description flex flex-col">
                    <h2 class="font-semibold text-2xl text-gray-800 capitalize">{{ auth()->user()->username }}</h2>
                    <span class="text-md capitalize font-semibold">{{ auth()->user()->role }}</span>
                </div>
            </div>
            <div class="action-section flex items-center">
                <div class="pr-2">
                    <a href="">
                        <button class="py-2 px-4 font-semibold text-white bg-blue-800 rounded-xl shadow-md capitalize">update password</button>
                    </a>
                </div>
                <div>
                    <a href="">
                        <button class="py-2 px-4 font-semibold text-white bg-blue-800 rounded-xl shadow-md capitalize">update password</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="grid grid-cols-12 rounded-xl gap-12">
                <div class="col-span-8 bg-white rounded-lg p-4">
                    <div class="flex flex-col items-start ">
                        <div class="capitalize text-black font-semibold text-2xl">
                            <h2>Informasi</h2>
                        </div>
                        <div class="capitalize text-gray-500 font-semibold text-md">
                            <h2>Informasi Personal</h2>
                        </div>
                    </div>
                    <div class="grid grid-cols-10 gap-8">
                        <div class="col-span-5">
                            <div class="flex flex-col">
                                <span class="text-gray-500 capitalize">Emai</span>
                                <span></span>
                            </div>
                        </div>

                        <div class="col-span-5">

                        </div>
                    </div>
                </div>

                <div class="col-span-4 bg-white rounded-lg p-4">
                    <div class="flex flex-col items-start">
                        <div class="capitalize text-black font-semibold text-2xl">
                            <h2>Informasi</h2>
                        </div>
                        <div class="capitalize text-gray-500 font-semibold text-md">
                            <h2>Informasi Personal</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dmain>
