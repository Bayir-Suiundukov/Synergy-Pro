<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>@yield('title-name')</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('resources/js/app.js') }}" defer></script>

    </head>

    <body class="font-sans antialiased">
      <div class="basis-full bg-fixed bg-cover bg-no-repeat h-screen " style="background-image: url(https://images.pexels.com/photos/270348/pexels-photo-270348.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260)" >
               <div class="backdrop-blur-sm backdrop-brightness-50 w-full h-full">
                @yield('content')
        </div>
      </div>
    </body>
</html>
