<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="black" />
    <link rel="shortcut icon" href="{{ asset('assets/icon.png') }}" type="image/x-icon" >
    <title>{{$title}}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" defer>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer data-turbolinks-suppress-warning></script>
</head>
<body>

    @yield('content')

</body>
</html>
