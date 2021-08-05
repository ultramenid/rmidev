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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >

    @livewireStyles
    <script src="{{ asset('js/app.js') }}"  ></script>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>

    @yield('content')



</body>
</html>
