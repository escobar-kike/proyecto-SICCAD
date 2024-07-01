<x-app-layout>
    <x-slot name="header">
        <h5 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado De Categorias De Fotos') }}
        </h5>
    </x-slot>
    @csrf

    @if (Session::get('success'))
        <div class="flex fade show m-8 items-center w-2/6 p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
            role="alert">
            <div class="flex flex-row items-center border-b sm:border-b-0 w-2/6 sm:w-auto pb-4 sm:pb-0">
                <div class="text-green-600">
                    <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="text-sm font-medium ml-3">{{ Session::get('success') }}</div>
            </div>
        </div>
    @endif
    @if (Session::get('edit'))
        <div class="flex m-8 items-center w-2/6 p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
            role="alert">
            <div class="flex flex-row items-center border-b sm:border-b-0 w-2/6 sm:w-auto pb-4 sm:pb-0">
                <div class="text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                </div>
                <div class="text-sm font-medium ml-3">{{ Session::get('edit') }}</div>
            </div>
        </div>
    @endif
    @if (Session::get('delet'))
        <div class="flex m-8 items-center w-2/6 p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
            role="alert">
            <div class="flex flex-row items-center border-b sm:border-b-0 w-2/6 sm:w-auto pb-4 sm:pb-0">
                <div class="text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </div>
                <div class="text-sm font-medium ml-3">{{ Session::get('delet') }}</div>
            </div>
        </div>
    @endif




    <div class="m-8 w-full">
        <a href="{{ url('Catefotos/create') }}"
            class="btn btn-primary btn-sm px-2 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none 
        focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Nuevo</a>
    </div>

    <div class="relative overflow-x-auto  m-8">
        <table class="w-80% text-sm text-left text-gray-900 dark:text-gray-900">
            <thead class="text-sm text-gray-900 uppercase bg-gray-300 dark:bg-gray-900 dark:text-gray-900">
                <tr>
                    <th scope="col" class="px-6 text-base/15 font-bold py-3">
                        descripcion
                    </th>
                    <th scope="col" class="px-6 text-base/15 font-bold text-center py-3">
                        Accion
                    </th>

                    @foreach ($categoria_fotos as $categoria_fotos)
            <tbody>
                <tr class="bg-white border-2 dark:bg-gray-900 dark:border-gray-900">
                    <th scope="row"
                        class="px-6 py-4 text-base/15 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $categoria_fotos->descripcion }}
                    </th>
                    <td class="px-6 py-4 text-center">

                        <form action="{{ route('Catefotos.destroy', $categoria_fotos) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <a href="{{ route('Catefotos.edit', $categoria_fotos) }}"
                                class="btn btn-primary btn-sm py-2 px-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar</a>

                            <button type="submit"
                                class="btn btn-succes btn-sm px-2 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg
                                hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Eliminar</button>

                        </form>
                    </td>
                </tr>

            </tbody>
            @endforeach
            </tr>
            </thead>

        </table>

    </div>


</x-app-layout>
