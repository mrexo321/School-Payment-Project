<x-dmain>
    <x-dtop>
        Pembayaran
    </x-dtop>

    <form action="{{ route('students.store') }}" method="post">

    @csrf

    <div class="sign-in-form-email flex flex-col mb-2">
        <label for="">Nama Petugas</label>
        <select class="mt-2 p-2 outline-none rounded-lg" name="officer_id" id="">
            @foreach ($payments as $payment )
            <option value="{{ $payment->id }}">{{ $payment->officer->officer_name }}</option>
            @endforeach
        </select>
    </div>




    <div class="sign-in-form-email flex flex-col mb-2">
        <label for="">Alamat</label>
        <textarea class="shadow focus:ring-1 focus:ring-blue-400 rounded-lg appearance-none border mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="address" id="" cols="10" rows="10"></textarea>
    </div>



    <div class="submit-button text-white font-semibold">
        <x-dbutton>Tambah</x-dbutton>
    </div>
    </form>
</x-dmain>
