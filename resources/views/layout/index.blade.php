<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="black" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon" >
    <title>{{$title}}</title>
    @yield('meta')

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    <script src="{{ asset('js/app.js') }}"  defer data-turbolinks-suppress-warning></script>
    <script src="{{ asset('js/alpine.js')}} "></script>



    @livewireStyles

</head>
<body>

    @yield('content')

    <div x-data="{ open: false }" @scroll.window="open = (window.pageYOffset > 50) ? true : false" >
        <div class="fixed z-20 sm:bottom-10 sm:right-12 bottom-6 right-4 cursor-pointer " x-show="open" x-transition x-cloak style="display: none !important" @click="window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          })">
            <div class="sm:w-14 w-7 sm:h-14 h-7 border border-white rounded-full bgrmi flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="sm:h-6 h-3 sm:w-6 w-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                  </svg>
            </div>
        </div>
    </div>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @stack('scripts')
</body>
</html>
