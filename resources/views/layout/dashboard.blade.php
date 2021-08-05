<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="black" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link rel="shortcut icon" href="{{ asset('assets/minecraft.png') }}" type="image/x-icon" >
    <title>{{$title}}</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <link  href="{{ asset('css/app.css') }}" rel="stylesheet" >
    @livewireStyles

    @livewireScripts
    <script defer  src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" ></script>
    <script src="{{ asset('js/app.js') }}"  ></script>
    <script src="{{ asset('js/dark.js')}}"></script>
</head>

<body class="selection-bg dark:selection-bg font-santuy">

    @yield('content')



</body>
</html>
