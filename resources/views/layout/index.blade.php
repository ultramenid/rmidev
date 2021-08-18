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
    <script src="{{ asset('js/app.js') }}"  defer data-turbolinks-suppress-warning></script>

    @livewireStyles

</head>
<body>

    @yield('content')

    <div x-data="{ open: false }" @scroll.window="open = (window.pageYOffset > 50) ? true : false">
        <div class="fixed z-20 sm:bottom-10 sm:right-12 bottom-6 right-4 cursor-pointer " x-show="open" x-transition x-cloak style="display: none !important" @click="window.scrollTo(0, 0)">
            <div class="w-14 h-14 border border-white rounded-full bgrmi flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                  </svg>
            </div>
        </div>
    </div>

    @livewireScripts

</body>
</html>
