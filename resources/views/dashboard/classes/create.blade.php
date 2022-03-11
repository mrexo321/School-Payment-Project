<x-dmain>
    <x-dtop>
        Kelas
    </x-dtop>

    <form action="{{ route('classes.store') }}" method="post">
        @csrf
        <div class="sign-in-form-email mb-2">
            <label for="">Nama Kelas</label>
            <input
                class="shadow rounded-lg appearance-none border focus:ring-1 focus:ring-blue-400 mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                value="{{ old('class_name') }}" type="text" name="class_name" id="class_name">
            @error('class_name')
                <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="sign-in-form-email mb-2">
            <label for="">Jurusan</label>
            <input
                class="shadow rounded-lg appearance-none border focus:ring-1 focus:ring-blue-400 mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                value="{{ old('major') }}" type="text" name="major" id="major">
            @error('major')
                <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <x-dbutton>Tambah</x-dbutton>
    </form>
</x-dmain>
