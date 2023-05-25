<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=M PLUS Rounded 1c' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=M PLUS 1' rel='stylesheet'>

    {{-- css --}}
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/navbar.css">
    @yield('css')

    <title>@yield('title')</title>

</head>
<body>

    @include('partials.header')



    @yield('content')


    {{-- js --}}
    <script type="text/javascript" defer src="{{URL::asset('js/navbar.js')}}"></script>
    @yield('js')

    {{-- <script>
        AOS.init();
    </script> --}}



</body>
</html>
