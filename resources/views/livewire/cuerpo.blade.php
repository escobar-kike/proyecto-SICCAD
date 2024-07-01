    <div>
        <form wire:submit.prevent="save" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-8 m-20 mb-6 md:grid-cols-3">
                
                <div class="flex">
                    <label for="first_name"
                        class="block mb-2 font-bold text-gray-900 text-base/15 dark:text-white">Identifiacado</label>
                    <div class="flex items-center mr-4">

                        <input id="inline-radio-1" required type="radio" wire:model="identificado" value="Si"
                            name="identificado"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-radio-1"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="inline-radio-2" required type="radio" wire:model="identificado" value="No"
                            name="identificado"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-radio-2"
                            class="ml-2 text-sm  font-medium text-gray-900 dark:text-gray-300">No</label>
                    </div>

                </div>

                <div>
                    <label for="first_name"
                        class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">CI</label>
                    <x-input type="text" id="first_name" wire:model="CI" name="CI"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />


                </div>
                <div>
                    <label for="first_name"
                        class="block mb-2text-base/15 font-bold text-gray-900 dark:text-white">Nombre</label>
                    <input type="text" wire:model="nombre" id="first_name" name="nombre"
                        class="bg-gray-50 text-transform capitalize border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <div>
                    <label for="last_name"
                        class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Apellido
                        Paterno</label>
                    <input type="text" id="last_name" wire:model="apellidop" name="apellidop"
                        class="bg-gray-50 border text-transform capitalize border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <div>
                    <label for="last_name"
                        class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Apellido
                        Materno</label>
                    <input type="text" id="last_name" wire:model="apellidom" name="apellidom"
                        class="bg-gray-50 border text-transform capitalize border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>

                <div class="flex">
                    <label for="last_name"
                        class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Sexo</label>
                    <div class="flex items-center mr-4">
                        <input id="inline-1-radio" required type="radio" wire:model="sexo" value="Hombre"
                            name="sexo"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-1-radio"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hombre</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="inline-2-radio" type="radio" required wire:model="sexo" value="Mujer"
                            name="sexo"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-2-radio"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mujer</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="inline-2-radio" type="radio" required wire:model="sexo" value="Indefenido"
                            name="sexo"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-2-radio"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Indefenido</label>
                    </div>

                </div>

                <div>
                    <label for="last_name"
                        class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Edad</label>
                    <input type="number" id="last_name" wire:model="edad" name="edad"
                        class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Edad
                        2</label>
                    <input type="number" id="last_name" wire:model="edad2" name="edad2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                </div>



                <div>
                    <label for="last_name"
                        class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Fecha</label>
                    <input type="date" id="last_name" wire:model="fecha" name="fecha"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>

                <div>
                    <label for="last_name"
                        class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Causa
                        de
                        Muerte</label>
                    <textarea id="message" rows="4" wire:model="causa_muerte" name="causa_muerte"
                        class="block p-2.5 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required></textarea>
                </div>

                <div>
                    <label for="last_name"
                        class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Localizacion</label>
                    <textarea type="text" rows="4" id="last_name" wire:model="ubicacion" name="ubicacion"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required></textarea>
                </div>

                <div>
                    <label for="countries"
                        class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Tipo
                        de Hecho</label>
                    <select id="countries" wire:model="tiposdehechos_id" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Seleccione....</option>
                        @forelse ($this->TiposHechos as $tipchos)
                            <option value="{{ $tipchos->id }}">{{ $tipchos->descripcion }}</option>

                        @empty
                        @endforelse

                    </select>
                </div>
            </div>

            <div class="grid gap-8 m-10 mb-6 md:grid-cols-1">
                <div>
                    <label class="m-10 font-bold text-base/15" for="last_name">Foto Principal</label>
                    <input accept="image/*" required for="last_name"
                        class="block w-80 m-10 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" wire:model="imgprincipal">

                    @error('imgprincipal')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    
                    <div wire:loading wire:target="imgprincipal"
                        class=" mb-4 m-8 bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">¡Imagen Cargando!</strong>
                        <span class="block sm:inline">Espere un momento hasta que la imagen se haya cargado.</span>

                    </div>
                    @if ($imgprincipal)
                        <img class="grid h-64 gap-8 m-10" src="{{ $imgprincipal->temporaryUrl() }}">
                    @endif
                </div>
            </div>

            <div class="grid gap-8 m-20 mb-6 md:grid-cols-2">
                <div>
                    <label for="last_name"
                        class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">APARTADO DE SEÑAS PARTICULARES</label>
                    
                    <label class="text-sm font-medium">Seleccione las Fotos</label>
                    <input accept="image/*"
                        class="block w-80 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" wire:model="imagenes" multiple value="{{ old('imagenes') }}">

                    @error('iamagenes.*')
                        <span class="error">{{ $message }}</span>
                    @enderror <br>


                    <ul role="list" class="divide-y divide-gray-100">
                        @forelse ($imagenes as $key => $images)
                            <li class="flex justify-between gap-x-6 py-5">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-20 w-20 flex-none rounded-50 bg-gray-50"
                                        src="{{ $images->temporaryURL() }}" alt="">

                                    <div class="min-w-0 flex-auto ">

                                        <label for="countries"
                                            class="block mb-2 text-sm text-gray-900 
                                        dark:text-white">Señas
                                            particular</label>
                                        <select required id="categoriasft{{ $key }}"
                                            wire:model.defer="dataimages.{{ $key }}.categoriasft_id"
                                            class="bg-gray-50 border font-bold border-gray-300 text-gray-900 text-sm 
                                        rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 
                                        p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Seleccione...</option>
                                            @forelse ($categoriaft as $cateft)
                                                <option value="{{ $cateft->id }}">{{ $cateft->descripcion }}
                                                </option>
                                            @empty
                                            @endforelse
                                        </select>

                                        <label for="descripcion{{ $key }}">{{ __('Descripción') }}
                                            <br>
                                        </label>
                                        <textarea id="descripcion{{ $key }}" rows="4"
                                            wire:model.defer="dataimages.{{ $key }}.descripcion"
                                            class="block p-2.5 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border 
                                                border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
                                                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required></textarea>
                                        @error('imagenes.' . $key . '.descripcion')
                                            <span class="text-xs text-red-600">{{ $message }}</span>
                                        @enderror


                                    </div>
                                </div>

                            </li>
                        @empty
                        @endforelse

                    </ul>

                    <div>

                    </div>
                </div>
            </div>


            <div class="grid gap-1 m-20 mb-6 md:grid-cols-2">
                <div>

                    <label class="font-bold text-base/15" for="">Dicatamenes</label><br>
                    <label class="text-sm font-medium">Seleccione los Archivos PDF</label>
                    <br>

                    <input accept="application/pdf"
                        class="block w-80 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" wire:model="archipdf" multiple>

                    @error('archipdf')
                        <span class="error">{{ $message }}</span>
                    @enderror

                    <ul role="list" class="divide-y divide-gray-100">
                        @forelse ($archipdf as $key => $archivo)
                            <li class="flex justify-between gap-x-6 py-5">
                                <div class="flex min-w-0 gap-x-4">
                                    <img class="h-20 w-20 flex-none rounded-50 bg-gray-50"
                                        src="{{asset('storage/Logo/pdfimg.png')}}"
                                        alt="">

                                    <div>
                                        <label for="countries"
                                            class="block mb-2 text-sm font-medium text-gray-900 
                                            dark:text-white">Dictamenes</label>
                                        <select required id="dictamenes{{ $key }}"
                                            wire:model.defer="datarchivo.{{ $key }}.dictamenes_id"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm 
                                            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 
                                            p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="">Seleccione...</option>
                                            @forelse ($dictamenes as $dicta)
                                                <option value="{{ $dicta->id }}">{{ $dicta->descripcion }}
                                                </option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                            </li>
                        @empty
                        @endforelse


                    </ul>

                </div>

            </div>



            <button type="submit"
                class="btn absolute m-2 px-2 font-bold btn-primary btn-sm py-2 text-sm text-center text-white bg-blue-700 rounded-lg hover:bg-blue-900 focus:ring-4 focus:outline-none 
                focus:ring-blue-300 dark:bg-blue-700 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>


        </form>

    </div>
