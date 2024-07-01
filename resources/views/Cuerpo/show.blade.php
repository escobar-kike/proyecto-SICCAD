<x-app-layout>
    <form wire:submit.prevent="update" enctype="multipart/form-data">
        @csrf
        <div class="m-10 w-2/5 h-2/5">

            @if ($Cuerpo->imgprincipal)
                <img  
                    src="{{ asset('storage/imgprincipal/' . $Cuerpo->imgprincipal) }}">
            @endif
        </div>
        <div class="justify-end grid gap-8 mr-40 absolute inset-x-14 top-36 mb-6">
            <div>
                <label for="first_name"
                    class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Identificado</label>
                <div class="flex items-center">
                    <input id="inline-radio-1" type="radio" value="Si" name="identificado" disabled
                        @checked($Cuerpo->identificado == 'Si')
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-radio-1"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
                </div>
                <div class="flex items-center ">
                    <input id="inline-radio-2" type="radio" value="No" name="identificado" disabled
                        @checked($Cuerpo->identificado == 'No')
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-radio-2"
                        class="ml-2 text-sm  font-medium text-gray-900 dark:text-gray-300">No</label>
                </div>


            </div>

            <div>
                <label for="first_name"
                class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">CI
                <x-label type="text" disabled id="first_name" value="{{ $Cuerpo->CI }}" name="CI"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </label>

            </div>
            <div>
                <label for="first_name"
                    class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Nombre</label>
                <x-label type="text" disabled value="{{ $Cuerpo->nombre }}" id="first_name" name="nombre"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Apellido
                    Paterno</label>
                <x-label type="text" disabled id="last_name" value="{{ $Cuerpo->apellidop }}" name="apellidop"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Apellido
                    Materno</label>
                <x-label type="text" id="last_name" disabled value="{{ $Cuerpo->apellidom }}" name="apellidom"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <div class="flex">
                <label for="last_name"
                    class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Sexo</label>
                <div class="flex items-center mr-4">
                    <input id="inline-1-radio" type="radio" disabled @checked($Cuerpo->sexo == 'Hombre') value="Hombre"
                        name="sexo"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-1-radio"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hombre</label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="inline-2-radio" type="radio" disabled @checked($Cuerpo->sexo == 'Mujer') value="Mujer"
                        name="sexo"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-2-radio"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mujer</label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="inline-2-radio" type="radio" disabled @checked($Cuerpo->sexo == 'Indefenido') value="Indefenido"
                        name="sexo"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-2-radio"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Indefenido</label>
                </div>

            </div>

            
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="grid grid-cols-3 gap-8 m-20 mb md:grid-clos-3">
            <div>
                <label for="last_name"
                    class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Edad</label>
                <x-label type="number" id="last_name" disabled value="{{ $Cuerpo->edad }}" name="edad"
                    class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Edad
                    2</label>
                <x-label type="number" disabled id="last_name" value="{{ $Cuerpo->edad2 }}" name="edad2"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <div>
                <label for="last_name"
                    class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Fecha</label>
                <x-label type="date" id="last_name" disabled value="{{ $Cuerpo->fecha }}" name="fecha"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <div>
                <label for="countries" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Tipo
                    de Hecho</label>
                <x-label id="countries" disabled
                    class="bg-gray-50 font-bold border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"

                    <option value="{{ $Cuerpo->tiposdehechos_id }}">{{ $Cuerpo->tipos_de_hechos->descripcion }}
                    </option>

            </div>

            <div>
                <label for="last_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Causa
                    de
                    Muerte</label>
                <textarea id="message" rows="4" disabled value="{{ $Cuerpo->causa_muerte }}" name="causa_muerte"
                    class="block p-2.5 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $Cuerpo->causa_muerte }}</textarea>
            </div>

            <div>
                <label for="last_name"
                    class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Localizacion</label>
                <textarea type="text" rows="4" id="last_name" disabled value="{{ $Cuerpo->ubicacion }}" name="ubicacion"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $Cuerpo->ubicacion }}</textarea>
            </div>

        </div>

        <div class="grid gap-8 m-20 mb-6 md:grid-cols-1">

            <ul role="list" class="divide-y divide-gray-100">
                @forelse ($Cuerpo->imagenes as $key => $images)
                    <li class="flex justify-between gap-x-6 py-5">
                        <div class="flex min-w-0 gap-x-4">
                            <img class="h-20 w-20 flex-none rounded-50 bg-gray-50"
                                src="{{ asset('storage/Categoriafoto/' . $images->rutaimg) }}" alt="">
                            <div class="min-w-0 flex-auto ">

                                <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 
                            dark:text-white">Señas
                                    particular</label>
                                <select disabled id="categoriasft{{ $key }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm 
                            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 
                            p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">


                                    <label for="descripcion{{ $key }}">{{ __('Descripción') }}
                                        <br>
                                    </label>
                                    <textarea disabled id="descripcion{{ $key }}" rows="4"
                                        class="block p-2.5 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border 
                                            border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
                                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required></textarea>


                            </div>
                        </div>

                    </li>
                @empty
                @endforelse

            </ul>

            <ul role="list" class="divide-y divide-gray-100">
                @forelse ($Cuerpo->cuerpos_dictamenes as $key => $archivo)
                    <li class="flex justify-between gap-x-6 py-5">
                        <div class="flex min-w-0 gap-x-4">
                            <img class="h-20 w-20 flex-none rounded-50 bg-gray-50"
                                src="{{ asset('storage/Logo/pdfimg.png') }}" alt="">

                            <div>
                                <input disabled id="dictamenes{{ $key }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm 
                                            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 
                                            p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                       
                                                
                            
                            </div>
                        </div>
                        
                    </li>
                @empty
                @endforelse


            </ul>


        </div>
    </form>
</x-app-layout>
