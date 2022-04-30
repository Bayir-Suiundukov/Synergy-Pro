@section('title-name')Регистрация@endsection

<x-guest-layout>
         <x-auth-card>
                  <!-- Логотип Синергии -->
                    <div title="Университет Синергия">
                        <a class="flex justify-center" href="/">
                            <x-application-logo class="shadow-xl hover:shadow-red-500/40 mx-2 hover:scale-110 ease-in duration-200 w-14 h-14 p-1.5 bg-white rounded-md" />
                        </a>
                    </div>
                    <span class="flex justify-center mb-8 text-lg font-medium">Регистрация</span>
                <!-- При ошибке валидации -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                          <form method="POST" action="{{ route('register') }}">
                            @csrf
                                    <div class="flex flex-row justify-between mt-5">

                                             <!-- Имя пользователя -->
                                             <div>
                                                      <x-label for="name" :value="__('Введите имя')" />

                                                      <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required  />
                                             </div>

                                             <!-- Фамилия -->
                                             <div>
                                                      <x-label for="surname" :value="__('Введите фамилию')" />

                                                      <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required  />
                                             </div>
                                    </div>
                                    <!-- номер -->
                                    <div class="mt-4">
                                            <x-label for="number" :value="__('Введите номер')" />
                                            <x-input id="number" class="block mt-1 w-full" type="tel" name="number" :value="old('number')" required  />
                                    </div>

                                    <!-- Электронная почта -->
                                    <div class="mt-4">
                                            <x-label for="email" :value="__('Ваша электронная почта')" />

                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    </div>

                                     <!-- Пароль -->
                                    <div class="mt-4">
                                             <x-label for="password" :value="__('Пароль')" />

                                             <x-input id="password" class="block mt-1 w-full"
                                                                type="password"
                                                                name="password"
                                                                required autocomplete="new-password" />
                                    </div>

                                     <!-- Подтверждение пароль -->
                                     <div class="mt-4">
                                              <x-label for="password_confirmation" :value="__('Подтвердите пароль')" />

                                              <x-input id="password_confirmation" class="block mt-1 w-full"
                                                                type="password"
                                                                name="password_confirmation" required />
                                     </div>
                                  <!-- Кнопка регистрации -->
                                  <div class="flex items-center justify-end mt-4">

                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{('Уже есть аккаунт?') }}
                                    </a>
                                      <x-button class="ml-4 ">
                                        {{ __('Регистрация') }}
                                      </x-button>
                                  </div>

                          </form>

          </x-auth-card>
</x-guest-layout>
