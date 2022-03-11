<div class="flex justify-between text-blue-800 font-semibold items-center pb-4">
    <div class="name-section bg-blue-800 text-white py-3 px-4 shadow-md rounded-xl">
        {{ $slot }}
    </div>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <div class="logout px-4 py-2 shadow-md rounded-xl bg-blue-800">
            <button type="submit" class="text-white font-semibold">
                Logout
            </button>
        </div>
    </form>
</div>
