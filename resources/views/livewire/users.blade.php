<div>
    <x-app-layout>
        <x-slot name="header">
        <h2 class="text-base/15 font-bold text-xl text-gray-900 dark:text-gray-200 leading-tight">
            {{ __('Lista de Usuarios') }}
        </h2>
        </x-slot>
        <form class="">


            
            <div class="absolute inset-x-40 top-500 block overflow-x-auto shadow-md sm:rounded-lg">
                <a type="button" href="{{ url('users/create') }}" class="btn text-gray-50 bg-gray-900">Nuevo Usuario</a>
                <table class="w-full text-sm text-left rtl:text-right text-gray-900 dark:text-gray-900">
                    <thead class="text-xs text-gray-900 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 text-center py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 text-center py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 text-center py-3">
                                E-mail
                            </th>
                            <th scope="col" class="px-6 text-center py-3">
                                Accion
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-2 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $user->id }}
                                </th>
                                <td class="px-6 text-center py-4">
                                    {{ $user->name }}
                                </td>
                                <td class="px-6 text-center py-4">
                                    {{ $user->email }}
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <a href="{{route('users.edit', $user)}}" type="button" class="p-2 m-1 btn btn-succes btn-sm py-2 text-sm font-medium  text-white bg-green-600 rounded-lg
                                    hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar</a>
                                    <x-button wire:model="delete" type="button"
                                        class="btn btn-danger bg-red-600">Eliminar</x-button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                <div class="card-body">
                    {{ $users->links() }}
                </div>
            </div>



        </form>
    </x-app-layout>
</div>
