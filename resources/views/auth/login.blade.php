@section('title-name')Вход@endsection
<x-guest-layout>
    <x-auth-card>
        <div title="Университет Синергия">
          <a class="flex justify-center" href="/">
            <x-application-logo class="shadow-xl hover:shadow-red-500/40 mx-2 hover:scale-110 ease-in duration-200 w-14 h-14 p-1.5 bg-white rounded-md" />
          </a>
          <span class="flex justify-center mb-8 text-lg font-medium">Войти в аккаунт</span>
      </div>
        <!-- Статус сессии -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- При ошибке валидации -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Ввод почты -->
            <div>
                <x-label for="email" :value="__('Электронная почта')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  />
            </div>

            <!-- Ввод пароля -->
            <div class="mt-4">
                <x-label for="password" :value="__('Пароль')" />

                <x-input id="password" class="block mt-1 w-full "
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Запомните меня пэжэ -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{('Хотите создать аккаунт?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{('Войти') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
