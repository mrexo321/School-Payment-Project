<x-app-layout>
    <div class="bg-gray-900 poppins">
        <div class="profile-wrapper mx-auto container max-w-screen-2xl">
            <div class="py-16">
                <div class="w-full">
                    <div class="flex justify-center gap-8 flex-row px-4 items-center">
                        <div class="w-full flex gap-x-6 px-4">
                            <div class="profile-content flex flex-col items-center gap-x-5 ">
                                <div class="profile-image flex-shrink-0">
                                    <img class="rounded-full border-2 w-16 h-16" src="https://source.unsplash.com/1920x2000/?profile" alt="">
                                </div>
                            </div>
                            <div class="profile-description text-white flex flex-col">
                                <h1 class="text-2xl items-center font-medium mb-2">{{ auth()->user()->username }}</h1>
                                <span class="mb-4 text-sm">Joined in {{ auth()->user()->created_at->format('j F') }}</span>
                                <span class="mb-2">{{ auth()->user()->username }} is a great person actually :)</span>
                            </div>
                        </div>
                        <div class="w-full lg:w-2/5">
                            <div class="flex flex-row items-center gap-2 md:gap-4">
                                <div class="success-payment w-1/2 flex items-center justify-center bg-green-400 rounded-lg  bg-opacity-10 h-20 lg:h-56">
                                    <div class="flex flex-col py-10 justify-between items-center h-full">
                                        <div class="icon">
                                            <div class="rounded-full text-white border-none p-2 bg-green-800">
                                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                            </div>
                                        </div>

                                        <div class="flex flex-col items-center">
                                            <div class="info-number">
                                                <div class="info-number text-3xl text-red-400">
                                                    0
                                                </div>
                                            </div>

                                            <div class="info-title">
                                                <div class="text-info-title text-gray-200 text-sm">
                                                    <span>Success Payments</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pending-payment w-1/2 flex items-center justify-center bg-red-400 rounded-lg  bg-opacity-10 h-20 lg:h-56">
                                    <div class="flex flex-col py-10 justify-between items-center h-full">
                                        <div class="icon">
                                            <div class="rounded-full text-white border-none p-2 bg-red-800">
                                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                            </div>
                                        </div>

                                        <div class="flex flex-col items-center">
                                            <div class="info-number">
                                                <div class="info-number text-3xl text-red-400">
                                                    0
                                                </div>
                                            </div>

                                            <div class="info-title">
                                                <div class="text-info-title text-gray-200 text-sm">
                                                    <span>Pending Payments</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
