<x-dmain>
    <x-dtop>
        Edit Kelas
    </x-dtop>

    <form action="{{ route('classes.update', $class->class_name) }}" method="post">
        @method('put')
        @csrf

        <div class="sign-in-form-email mb-2">
            <label for="">Nama Kelas</label>
            <input
                class="shadow rounded-lg appearance-none border focus:ring-1 focus:ring-blue-400 mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                value="{{ old('class_name', $class->class_name) }}" type="text" name="class_name" id="class_name">
            @error('class_name')
                <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="sign-in-form-email mb-2">
            <label for="">Jurusan</label>
            <input
                class="shadow focus:ring-1 focus:ring-blue-400 rounded-lg appearance-none border mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                value="{{ old('major', $class->major) }}" type="text" name="major" id="major">
            @error('major')
                <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600 ">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="submit-button text-white font-semibold">
            <button class="bg-black p-2 w-full text-center rounded-lg" type="submit">Update</button>
        </div>
    </form>
</x-dmain>
