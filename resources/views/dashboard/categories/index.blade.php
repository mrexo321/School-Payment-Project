@foreach ($categories as $category )
    <h1>{{ $category->name }}</h1>
    <h1>{{ $category->image }}</h1>
@endforeach
