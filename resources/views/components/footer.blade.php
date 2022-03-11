<div class="bg-gray-900">
    <x-vertical/>
    <div class="grid grid-cols-4 p-10">
        <div class="flex">
            <ul class="capitalize">
                <li class="font-semibold pb-4 text-white uppercase">Explore</li>
                <a href="">
                    <li class="pb-4 text-gray-300 hover:text-white text-sm">Home</li>
                </a>
                <a href="">
                    <li class="pb-4 text-gray-300 hover:text-white text-sm">Categories</li>
                </a>
                <a href="">
                    <li class="pb-4 text-gray-300 hover:text-white text-sm">About</li>
                </a>
                <a href="">
                    <li class="pb-4 text-gray-300 hover:text-white text-sm">Unknown</li>
                </a>
            </ul>
        </div>
        <div class="flex">
            <ul class="text-white capitalize">
                <li class="font-semibold pb-4 uppercase">Social</li>
                <a href="">
                    <li class="pb-4 text-gray-300 hover:text-white text-sm">Facebook</li>
                </a>
                <a href="">
                    <li class="pb-4 text-gray-300 hover:text-white text-sm">Github</li>
                </a>
                <a href="">
                    <li class="pb-4 text-gray-300 hover:text-white text-sm">Discord</li>
                </a>
                <a href="">
                    <li class="pb-4 text-gray-300 hover:text-white text-sm">Instagram</li>
                </a>
            </ul>
        </div>
        <div class="flex">
            <ul class="text-white capitalize">

                <li class="font-semibold pb-4 uppercase">Social</li>

                <a href="">
                    <li class="pb-4 text-gray-300 hover:text-white text-sm">Facebook</li>
                </a>
                <a href="">
                    <li class="pb-4 text-gray-300 hover:text-white text-sm">Github</li>
                </a>
                <a href="">
                    <li class="pb-4 text-gray-300 hover:text-white text-sm">Discord</li>
                </a>
                <a href="">
                    <li class="pb-4 text-gray-300 hover:text-white text-sm">Instagram</li>
                </a>
            </ul>
        </div>
        <div class="flex text-white flex-col">
            <div class="description pb-8">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, alias eligendi rerum aliquam repellendus assumenda ipsa culpa nulla quam architecto?</h2>
            </div>
            <div class="copyright capitalize">
                <h2>trademark licensed Copyright &copy; 2022- {{ date('Y') }} </h2>
            </div>
        </div>
    </div>

    <div class="flex text-white justify-center border-t border-dashed border-gray-800 p-10">
        <h1 class="items-center text-3xl italic uppercase">{{ config('app.name') }}</h1>
    </div>
</div>
