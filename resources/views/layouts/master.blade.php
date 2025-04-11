<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    {{-- Vite --}}
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    
    {{-- Tab Title --}}
    <title>@yield("tab-title")</title>

</head>
<body class="d-flex flex-column h-100">

    {{-- Header --}}
    @include('partials.header')

    {{-- Contenuto Pagina --}}
    @yield('contenuto')
    
</body>
</html>