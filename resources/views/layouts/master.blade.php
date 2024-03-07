<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Si Pandu Resik | {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/icon.png') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    * {
        font-family: 'Poppins';
    }

    .bg-img {
        background-image: url({{ asset('images/bg.png') }}); 
        background-size: cover;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }
</style>
<body>
    <main>
        @yield('content')
    </main>
    @yield('addJavascript')
    @include('sweetalert::alert')
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
</body>
</html>