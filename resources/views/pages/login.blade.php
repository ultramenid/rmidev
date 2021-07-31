
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="black" />
    <link rel="shortcut icon" href="{{ asset('assets/icon.png') }}" type="image/x-icon" >
    <title>{{$title}}</title>
    {{-- token for turbolinks --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- disable turbolinks cache --}}
    <meta name="turbolinks-cache-control" content="no-cache">


    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer data-turbolinks-suppress-warning></script>
    <script src="{{ asset('js/dark.js')}}"></script>
    @livewireStyles

</head>

<body class="selection-bg dark:selection-bg font-santuy">

    <div class="h-screen flex items-center bg-gray-200 dark:bg-newgray-900  px-4">
        <livewire:login-component />
    </div>

    @livewireScripts
</body>
</html>
