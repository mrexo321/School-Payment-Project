<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

<x-dmain>
    <x-dtop>
        Edit Siswa
    </x-dtop>

    <form action="{{ route('students.store') }}" method="post">

        @csrf

    <div class="sign-in-form-email mb-2">
        <label for="">NISN</label>
        <input class="shadow rounded-lg appearance-none border focus:ring-1 focus:ring-blue-400 mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nisn' , $student->nisn) }}" type="text" name="nisn" id="nisn">
        @error('nisn')
        <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="sign-in-form-email mb-2">
        <label for="">NIS</label>
        <input class="shadow rounded-lg appearance-none border focus:ring-1 focus:ring-blue-400 mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nis' , $student->nis) }}" type="text" name="nis" id="nis">
        @error('nis')
        <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="sign-in-form-email mb-2">
        <label for="">Nama siswa</label>
        <input class="shadow focus:ring-1 focus:ring-blue-400 rounded-lg appearance-none border mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name' , $student->name) }}" type="text" name="name" id="name">
        @error('name')
        <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600 ">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="sign-in-form-email flex flex-col mb-2">
        <label for="">Kelas</label>
        <select class="mt-2 p-2 outline-none" name="class_id" id="">
            @foreach ($classes as $class )
            <option value="{{old('class_id'),$class->id }}">{{ $class->class_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="sign-in-form-email flex flex-col mb-2">
        <label for="">Alamat</label>
        <textarea class="shadow focus:ring-1 focus:ring-blue-400 rounded-lg appearance-none border mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="address"" id="" cols="5" rows="5">{{ old('address' , $student->address) }}</textarea>
    </div>



    <div class="submit-button text-white font-semibold">
        <x-dbutton>Tambah</x-dbutton>
    </div>

</x-dmain>
