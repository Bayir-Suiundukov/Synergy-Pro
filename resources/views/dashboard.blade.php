@section('title-name')Личный кабинет@endsection
@extends('layouts.app')
@section('content')
            <div class="flex justify-between mx-4 p-2.5">
                   <!-- Вся навигационная панель -->
                  <div class="">
                               <!-- Логотип Синергии -->
                               <div title="Университет Синергия" class="shadow-xl hover:shadow-red-500/40 mx-2 hover:scale-110 ease-in duration-200">
                                   <a href="https://synergy.ru/">
                                       <x-application-logo class="w-14 h-14 p-1.5 bg-white rounded-md" />

                                   </a>

                               </div>
                 </div>
                 <!-- Имя, Войти-Выйти -->
                 <form class="my-auto" method="POST" action="{{ route('logout') }}">
                      @csrf
                          <span title="Ваше имя" class="border border-transparent rounded-md bg-white py-2 px-3 text-sm font-medium text-gray-700 uppercase">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                          <a class="hover:scale-110 shadow-xl hover:shadow-blue-500/80 inline-flex items-center px-3 mr-4 py-1.5 bg-blue-700 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-white hover:text-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-4" href="route('logout')"
                         onclick="event.preventDefault();
                         this.closest('form').submit();">
                         {{ __('Выйти') }}
                         </a>
                 </form>
           </div>

           <div class="flex justify-center flex-wrap">
                    <div class="w-96">

                             <!-- Информация -->


                                      <div class="bg-white px-3 py-3 mt-32 shadow-2xl shadow-blue-500/50 rounded-lg opacity-90 border-4 border-blue-700 break-all h-fit">
                                                                        <!-- Голова -->
                                                                        <div class="flex justify-between">
                                                                                 <label class="text-lg font-semibold"> Данные пользователя </label>
                                                                                <a href="{{ route('auth-edit') }}" class=" border rounded-md py-0.5 px-1 text-gray-400 hover:bg-neutral-400 hover:text-white ">Редактировать</a>
                                                                        </div>

                                                                         <!-- Вся информация-->
                                                                        <div class="mt-3">
                                                                                 <!-- имя и фамилия-->
                                                                                 <div class="flex flex-row flex-wrap ">

                                                                                          <div class=" mx-2 mb-6">
                                                                                                  <!-- имя-->
                                                                                                  <label class="text-sm ">Имя</label><br/>
                                                                                                  <span class="text-lg border-gray-400 border-b-2">{{ Auth::user()->name }}</span><br/>
                                                                                         </div>

                                                                                         <div class=" mx-2 mb-6">
                                                                                                  <!-- фамилия-->
                                                                                                  <label class="text-sm ">Фамилия</label><br/>
                                                                                                  <span class="text-lg border-gray-400 border-b-2">{{ Auth::user()->surname }}</span><br/>
                                                                                         </div>
                                                                                </div>

                                                                                <!-- почта -->
                                                                                <div class="mx-2 mb-6">
                                                                                         <label class="text-sm ">Email</label><br/>
                                                                                         <span class="text-lg border-gray-400 border-b-2">{{ Auth::user()->email }}</span><br/>
                                                                                </div>
                                                                                <!-- номер-->
                                                                                <div class="mx-2 my-6">
                                                                                         <label class="text-sm ">Ваш номер</label><br/>
                                                                                         <span class="text-lg border-gray-400 border-b-2">{{ Auth::user()->number }}</span><br/>
                                                                                </div>
                                                                                <!-- о себе -->
                                                                                <div class="mx-2 mb-4 mt-6">
                                                                                         <label class="text-sm">О себе</label><br/>
                                                                                        <p class="text-lg border-gray-400 border-b-2">{{ Auth::user()->aboutme }}@if(Auth::user()->aboutme === NULL)<span class="animate-pulse opacity-80">Напишите о себе)))</span>@endif</p>
                                                                                </div>

                                                                        </div>
                                      </div>



                           <!-- Ссылки -->
                           <div class="mt-5 w-96">
                                    <div class="flex justify-between border-4 shadow-2xl shadow-blue-500/50 opacity-90 border-blue-700 p-1.5 bg-white rounded-md h-fit">

                                                                  <!-- Инста -->
                                                                  <a target="_blank" class="my-2.5 rounded-full shadow-xl hover:shadow-rose-500/40 mx-5 hover:scale-110 ease-in duration-200" title="Instagram" href="https://www.instagram.com/synergyuniversity/"><img src="https://www.svgrepo.com/show/331440/instagram.svg" height="45" width="45" alt="Instagram"></a>
                                                                  <!-- ВК -->
                                                                  <a target="_blank" class="my-2.5 rounded-full shadow-xl hover:shadow-blue-800/40 mx-5 hover:scale-110 ease-in duration-200" title="VK" href="http://vk.com/synergyuniversity"><img src="https://www.svgrepo.com/show/331634/vk-v2.svg" height="45" width="45" alt="VK"></a>
                                                                  <!-- ют -->
                                                                  <a target="_blank" class="my-2.5 rounded-full shadow-xl hover:shadow-red-500/40 mx-5 hover:scale-110 ease-in duration-200" title="Youtube" href="https://www.youtube.com/user/synergytvru"><img src="https://www.svgrepo.com/show/95009/youtube.svg" height="45" width="45" alt="Youtube"></a>
                                                                  <!-- ТГ -->
                                                                  <a target="_blank" class="my-2.5 rounded-full shadow-xl hover:shadow-sky-500/40 mx-5 hover:scale-110 ease-in duration-200" title="Telegram" href="https://t.me/synergyunivers"><img src="https://www.svgrepo.com/show/354443/telegram.svg" height="45" width="45" alt="Telegram"></a>

                                    </div>
                           </div>
                    </div>
           </div>

@endsection
