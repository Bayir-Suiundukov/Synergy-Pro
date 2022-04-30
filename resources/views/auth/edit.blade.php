@section('title-name')Обновление@endsection
<x-guest-layout class="bg-gray-700">
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current" />
            </a>
        </x-slot>

        <!-- При ошибке валидации -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('auth-edit') }}">
            @csrf
            <div class="mb-3 text-lg font-semibold">
                <label>Редактирование профиля</label>
            </div>


        <div class="flex flex-row justify-between mt-5">

            <!-- Имя пользователя -->
            <div>
                <x-label for="name" :value="__('Введите имя')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ Auth::user()->name }}" required autofocus />
            </div>

            <!-- Фамилия -->
            <div class="">
                <x-label for="surname" :value="__('Введите фамилию')" />

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" value="{{ Auth::user()->surname }}" required autofocus />
            </div>
        </div>
            <!-- О себе -->
            <div class="mt-4">
                <x-label for="aboutme" :value="__('Напишите о себе')" />

                    <textarea class="border-2 p-1.5 rounded-md shadow-sm border-gray-500 border-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80" rows="5" cols="50" id="aboutme" name="aboutme"/>{{ Auth::user()->aboutme }}</textarea>

            </div>

            <!-- номер -->
            <div class="mt-4">
                <x-label for="number" :value="__('Введите номер')" />

                <x-input id="number" class="block mt-1 w-full" type="tel" name="number" value="{{ Auth::user()->number }}" required autofocus />
            </div>

            <!-- Электронная почта -->
            <div class="mt-4">
                <x-label for="email" :value="__('Ваша электронная почта')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ Auth::user()->email }}" required />
            </div>


            <div class="flex items-center justify-between mt-4">


                <x-button>
                    {{ __('Обновить') }}
                </x-button>

                <a href={{ route('dashboard') }} class="shadow-xl hover:shadow-blue-500/80 inline-flex items-center px-4 py-2 bg-blue-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-white hover:text-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{('Назад') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
