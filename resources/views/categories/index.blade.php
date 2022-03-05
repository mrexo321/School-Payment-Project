
<x-payment>
    <div class="fixed top-0 bottom-0 w-px h-full min-h-screen m-auto border-r border-dashed md:left-20 left-28 z-100 border-gray-300/10 dark:border-gray-50/5">

    </div>
    <div class="bg-gray-900 poppins md:py-12 lg:py-10 h-screen">
        <div class="profile-wrapper max-w-screen-2xl">
            <div class="py-12">
                <div class="w-full">
                    <div class="flex justify-center gap-8 flex-row mx-auto px-4 items-center">
                        <div class="w-full flex gap-x-6 px-4 lg:w-3/5">
                            <div class="description text-white flex flex-col">
                                <div class="title-description pb-12">
                                    <h1 class="text-4xl items-center font-medium mb-2 capitalize">
                                        Macam Macam <span class="text-sky-400">Pembayaran</span>
                                    </h1>
                                </div>

                                <div class="sub-title">
                                    <div class="sub-1 mb-4">
                                        <h2 class="text-xl">
                                            Dibawah Ini Adalah Macam Macam Jenis Pembayaran
                                        </h2>
                                    </div>
                                    <div class="sub-2 mb-4">
                                        <h2 class="text-xl">
                                            Jika Tidak Ada Jenis Pembayaran Silahkan Hubungi
                                            Kami <a class="text-blue-400 font-semibold underline" href="/contact">Disini</a> Yaaaa :)
                                        </h2>
                                    </div>
                                    <div class="sub-3 mb-4">
                                        <h2 class="text-xl">
                                            Jika Masih bingung bagaimana cara pembayarannya klik <a class="text-blue-400 underline font-semibold" href="/howto">Disini</a>
                                            Okeeee?
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-2/5 pr-4">
                            <div class="items-center lg:flex justify-center lg:justify-end">
                                <div class="flex items-center bg-gradient-to-r justify-center from-black via-slate-800 to-black w-3/4 lg:w-2/3  text-white rounded-3xl h-96">
                                    <div class="p-8 text-center space-y-4">
                                        <div class="total-categories-payment">
                                            <h1 class="text-8xl text-sky-500 font-semibold">{{$categories->count() }}</h1>
                                        </div>
                                        <div class="card-description">
                                            <div class="sub mb-4 capitalize">
                                                <span>{{ $latestCategory->name }}</span>
                                            </div>
                                            <div class="sub text-gray-400 font-semibold mb-4">
                                                <span>Jumlah jenis pembayaran :)</span>
                                            </div>
                                            <div class="button-card">
                                                <button class="bg-gray-600 transition duration-150 hover:bg-gray-800 text-white text-center px-8 py-2 rounded-full">
                                                    Details
                                                </button>
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

    <div class="py-5 bg-white h-screen">
        <div class="px-4 mx-auto max-w-screen-lg lg:max-w-screen-2xl">
            <ul class="grid grid-cols-12 col-span-10 col-start-2 gap-y-14 sm:gap-4 lg:gap-16 lg:py-10">
                @foreach ($categories as $category )
                <li class="col-span-12 sm:col-span-6 lg:col-span-4">
                    <div class="card-section">
                        <a href="">
                            <span class=" shadow-md ">
                                <img class="mb-1 w-full rounded-lg flex-shrink-0" src="https://source.unsplash.com/300x150/?webdevelopment" alt="">
                            </span>
                        </a>
                        <span class="flex items-center">
                            <div class="space-x-2">
                                <a class="text-xs text-primary-500" href="/categories/{{ $category->name }}">
                                    {{ $category->name }}
                                </a>
                            </div>
                        </span>
                        <span class="flex">
                            <a class="text-lg" href="">{{ $category->name }}</a>
                        </span>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-payment>
