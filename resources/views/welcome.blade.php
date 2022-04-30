<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Добро Пожаловать!</title>

    </head>
    <body >
        <div class="bg-fixed no-repeat bg-cover bg-no-repeat" style="background-image: url(https://images.pexels.com/photos/165509/pexels-photo-165509.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260)">
            <div class="flex items-top justify-center min-h-screen sm:items-center backdrop-brightness-50 backdrop-contrast-100">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="shadow-xl hover:shadow-blue-500/50shadow-xl hover:shadow-blue-500/50 inline-flex items-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold text-md text-blue-700 uppercase tracking-widest hover:bg-blue-900 hover:text-white active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 hover:scale-110">Личный кабинет</a>
                          @else
                            <a href="{{ route('login') }}"    class="shadow-xl hover:shadow-blue-500/50 inline-flex items-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold text-md text-blue-700 uppercase tracking-widest hover:bg-blue-900 hover:text-white active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mr-16 hover:scale-110">Войти</a>

                            @if (Route::has('register'))

                            <a href="{{ route('register') }}" class="shadow-xl hover:shadow-blue-500/50 inline-flex items-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold text-md text-blue-700 uppercase tracking-widest hover:bg-blue-900 hover:text-white active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-16 hover:scale-110">Регистрация</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
