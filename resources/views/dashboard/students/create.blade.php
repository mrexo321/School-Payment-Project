<form method="post" action="{{ route('students.store') }}">
    @csrf
    <input type="text" name="nisn" id="nisn">
    <input type="text" name="nis" id="nis">
    <input type="text" name="name" id="name">
    <select name="class_id" id="">
        @foreach ($classes as $class )
        <option value="{{ $class->id }}">{{ $class->class_name }}</option>
        @endforeach
    </select>
    <textarea name="address" id="address" cols="30" rows="10">

    </textarea>

    <button type="submit">Submit</button>

</form>
