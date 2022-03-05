<form action="{{ route('categories.store') }}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="">

        <input type="text" name="name">
        @error('name')
            {{ $message }}
        @enderror
        <input type="file" name="image">

        @error('image')
            {{ $message }}
        @enderror
        <button type="submit" name="submit">Submit</button>
    </div>
</form>
