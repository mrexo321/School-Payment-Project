
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>||</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-blue-100">

    <x-dheader>

    </x-dheader>

    <div class="container">
        <x-dsidebar>
            <div class="w-full p-8">

                {{ $slot }}
            </div>
        </x-dsidebar>
    </div>

</body>
@include('sweetalert::alert')

</html>
