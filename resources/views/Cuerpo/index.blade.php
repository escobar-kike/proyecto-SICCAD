<x-app-layout>
    <x-slot name="header ">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

        </h2>
    </x-slot>
    <div class="m-8 w-full ">
        
        <a href="{{ url('Cuerpos/create') }}"
            class="btn btn-primary p-2 btn-sm absolute right-10  py-2 px-4 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none 
        focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">AGREGAR </a>

       <!-- <a href="{{ url('Cuerpos/create') }}"
            class="btn btn-primary p-10 btn-sm  absolute bottom-10 right-10 py-2 shadow-2xl drop-shadow-2xl shadow-indigo-500/50 px-2 text-sm font-medium text-center text-white bg-red-600 rounded-full hover:bg-red-800 focus:ring-4 focus:outline-none 
        focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Manual </a>-->
    </div>
    <br>
    <br>
    <div class="">
        @livewire('CuerpoTable')
        </div>
</x-app-layout>
