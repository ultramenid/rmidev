<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="black" />
    <link rel="shortcut icon" href="{{ asset('assets/minecraft.png') }}" type="image/x-icon" >
    <title>{{$title}}</title>
    @yield('meta')



    <link href="{{ asset('css/app.css?'.time()) }}" rel="stylesheet" >
    @livewireStyles

    @livewireScripts
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('js/app.js') }}"  defer data-turbolinks-suppress-warning></script>

</head>
<body>

    @yield('content')



</body>
</html>
