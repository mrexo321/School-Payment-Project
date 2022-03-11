<x-dmain>
    <x-dtop>
        Edit pembayaran
    </x-dtop>

    <form action="{{ route('payments.update', $payment->username) }}" method="post">
        @method('put')
        @csrf

        <div class="sign-in-form-email mb-2">
            <label for="">Username</label>
            <input
                class="shadow rounded-lg appearance-none border focus:ring-1 focus:ring-blue-400 mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                value="{{ old('username', $payment->username) }}" type="text" name="username" id="username">
            @error('username')
                <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="sign-in-form-email mb-2">
            <label for="">Username</label>
            <input
                class="shadow rounded-lg appearance-none border focus:ring-1 focus:ring-blue-400 mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                value="{{ old('username', $payment->username) }}" type="text" name="username" id="username">
            @error('username')
                <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>




        <div class="submit-button text-white font-semibold">
            <button class="bg-black p-2 w-full text-center rounded-lg" type="submit">Update</button>
        </div>
    </form>
</x-dmain>
