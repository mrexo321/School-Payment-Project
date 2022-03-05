



<nav class="navigation p-4  text-gray-400 print:hidden bg-gray-900 z-50 border-b border-dashed border-gray-800">
    <div class="flex justify-between items-center top-section">
        {{-- Left Navbar Section --}}
        <div class="left-section">
            <div class="flex items-center">
                <div class="logo mr-6 text-white">
                    <a href="/">
                        <h1 class="font-bold text-2xl">Logo Disini</h1>
                    </a>
                </div>
                <ul class="flex">
                    @foreach ( $navbar as $menu => $url )
                        <a class="text-gray-300 text-md text-center capitalize" href="/{{ $url }}">
                            <li class="mr-2 px-4 py-2 font-semibold rounded-lg hover:bg-black {{ Request::is($url) ? 'border border-white  border-opacity-10 ' : '' }}">{{ $menu }}</li>
                        </a>
                    @endforeach



                </ul>
            </div>
        </div>

        {{-- Right Navbar Section --}}
        <div class="right-section">
            <div class="flex items-center">
                <x-search/>

                <div class="separator mr-4 text-gray-600">
                    <h1 class="text-2xl">|</h1>
                </div>
                @auth
                <div class="notification mr-4">
                    <a href="#">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </a>
                </div>

                <div class="ml-3 relative">
                    <div>
                      <button id="dropdown" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                      </button>
                </div>

                {{-- Dropdown Menu --}}
                <div id="dropdownContent" class="opacity-0 origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 text-white ring-1 ring-black ring-opacity-5 focus:outline-none bg-gray-800" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="/profile/{{ auth()->user()->identifier }}" class="block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                    <a href="/profile/password/edit" class="block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="user-menu-item-1">Update Password</a>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="block px-4 py-2 text-sm" type="submit">
                            Sign Out
                        </button>
                    </form>
                </div>

                @else
                <div class="login text-white font-semibold mr-4">
                    <a href="/login">
                        <span class="text-md">Login</span>
                    </a>
                </div>



                <div class="register text-white font-semibold ml-4">
                    <a href="/register">
                        <span class="text-md">Register</span>
                    </a>
                </div>
                @endauth
            </div>
        </div>
    </div>
</nav>

<script>
    let dropdownButton = document.getElementById('dropdown');
    let dropdownContent = document.getElementById('dropdownContent');

    // //for Category
    // let dropdownCategory = document.getElementById('category');
    // let dropdownMenu = document.getElementById('dropdownMenu');

    if (dropdownButton) {
        dropdownButton.addEventListener('click' , function(){
        if(dropdownContent.classList.contains('opacity-0')){
            dropdownContent.classList.toggle('opacity-100')
            dropdownContent.classList.add('scale-100' , 'transition' , 'ease-in' , 'duration-200');
        }else{
            dropdownContent.classList.remove('opacity-100');
        }
    });
    }

    // dropdownCategory.addEventListener('click' , function(){
    //     if(dropdownMenu.classList.contains('hidden')){
    //         dropdownMenu.classList.remove('hidden')
    //         dropdownMenu.classList.add('scale-100' , 'transition' , 'ease-in' , 'duration-200');
    //     }else{
    //         dropdownMenu.classList.add('hidden');
    //     }
    // });
</script>
