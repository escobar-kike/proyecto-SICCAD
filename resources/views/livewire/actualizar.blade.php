<div>
    <form wire:submit.prevent="update" enctype="multipart/form-data">
        @csrf
        <div class="grid gap-8 m-20 mb-6 md:grid-cols-3">
            <div class="flex">
                <label for="first_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Identifiacado</label>
                <div class="flex items-center mr-4">

                    <input id="inline-radio-1" type="radio" wire:model="edit.identificado" value="Si"
                        name="identificado"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-radio-1"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="inline-radio-2" type="radio" wire:model="edit.identificado" value="No"
                        name="identificado"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-radio-2"
                        class="ml-2 text-sm  font-medium text-gray-900 dark:text-gray-300">No</label>
                </div>

            </div>

            <div>
                <label for="first_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">CI</label>
                <x-input type="text" id="first_name" wire:model="edit.CI" name="CI"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />


            </div>
            <div>
                <label for="first_name"
                    class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Nombre</label>
                <input type="text" wire:model="edit.nombre" id="first_name" name="nombre"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Apellido
                    Paterno</label>
                <input type="text" id="last_name" wire:model="edit.apellidop" name="apellidop"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Apellido
                    Materno</label>
                <input type="text" id="last_name" wire:model="edit.apellidom" name="apellidom"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <div class="flex">
                <label for="last_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Sexo</label>
                <div class="flex items-center mr-4">
                    <input id="inline-1-radio" type="radio" wire:model="edit.sexo" value="Hombre" name="sexo"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-1-radio"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hombre</label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="inline-2-radio" type="radio" wire:model="edit.sexo" value="Mujer" name="sexo"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-2-radio"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mujer</label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="inline-2-radio" type="radio" wire:model="edit.sexo" value="Mujer" name="sexo"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-2-radio"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Indefenido</label>
                </div>

            </div>

            <div>
                <label for="last_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Edad</label>
                <input type="number" id="last_name" wire:model="edit.edad" name="edad"
                    class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Edad
                    2</label>
                <input type="number" id="last_name" wire:model="edit.edad2" name="edad2"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>



            <div>
                <label for="last_name"
                    class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Fecha</label>
                <input type="date" id="last_name" wire:model="edit.fecha" name="fecha"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
             <div>
                <label for="countries" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Tipo
                    de
                    Hecho</label>
                <select id="countries" wire:model="edit.tiposdehechos_id" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Seleccione....</option>
                    @forelse ($this->TiposHechos as $tipchos)
                        <option value="{{ $tipchos->id }}">{{ $tipchos->descripcion }}</option>

                    @empty
                    @endforelse

                </select>
            </div>

            <div>
                <label for="last_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Causa
                    de
                    Muerte</label>
                <textarea id="message" rows="4" wire:model="edit.causa_muerte" name="causa_muerte"
                    class="block p-2.5 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required></textarea>
            </div>

            <div>
                <label for="last_name"
                    class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">Localizacion</label>
                <textarea type="text" rows="4" id="last_name" wire:model="edit.ubicacion" name="ubicacion"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required></textarea>
            </div>

           
        </div>

        <div class="col-span-full">
            <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                <input type="file" class="hidden" x-ref="avatar"
                    x-on:change="
                        photoName = $refs.avatar.files[0].name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            photoPreview = e.target.result;
                        };
                        reader.readAsDataURL($refs.avatar.files[0]);"
                    accept="image/*" name="avatar_new" id="avatar">
               
        
                <div class=" m-6 mb-6">
                    <div class="grid gap-8 m-10 mb-6 md:grid-cols-1" x-show="! photoPreview">
                        @if ($edit['imgprincipal'])
                            <img class="m-2 h-64" src="{{ asset('storage/Imgprincipal/' . $edit['imgprincipal']) }}">
                        @endif
                    </div>
                    <div class="m-1" x-show="photoPreview" style="display: none;">
                        <span class="block w-80 h-80  m-auto shadow"
                            x-bind:style="'background-size: cover; background-repeat: no-repeat;  background-image: url(' + photoPreview + ');'"
                            style="background-size: cover; background-repeat: no-repeat; ">
                        </span>
                    </div>
                    <button type="button"
                        class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3"
                        x-on:click.prevent="$refs.avatar.click()">
                        Seleccionar Nueva Foto
                    </button>
                </div>
                @error('edit.imgprincipal')
                    <span class="text-red-400 text-xs">{{ $message }}</span>
                @enderror
                <div wire:loading wire:target="edit.imgprincipal"
                    class="mb-4 m-8 bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">¡Imagen Cargando!</strong>
                    <span class="block sm:inline">Espere un momento hasta que la imagen se haya cargado.</span>
                </div>
            </div>
        </div>

        <div class="grid gap-8 m-20 mb-6 md:grid-cols-2">
            <div>
                <label for="last_name" class="block mb-2 text-base/15 font-bold text-gray-900 dark:text-white">APARTADO DE SEÑAS PARTICULARES</label>

                <label class="text-base/15 font-bold">Seleccione las Fotos</label>
                <input accept="image/*"
                    class="block w-80 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    type="file" wire:model="imagenes" multiple value="{{ old('imagenes') }}">

                @error('imagenes.*')
                    <span class="error">{{ $message }}</span>
                @enderror

                <ul role="list" class="divide-y divide-gray-100">
                    @forelse ($imagenes as $key => $images)
                        <li class="flex justify-between gap-x-6 py-5">
                            <div class="flex min-w-0 gap-x-4">
                                <img class="h-20 w-20 flex-none rounded-50 bg-gray-50"
                                    src="{{ asset('storage/Categoriafoto/' . $images->rutaimg) }}" alt="">

                                <div class="min-w-0 flex-auto ">

                                    <label for="countries"
                                        class="block mb-2 font-semibold text-gray-900 
                                    dark:text-white">Señas
                                        particular</label>
                                    <select required id="categoriasft{{ $key }}"
                                        wire:model.defer="dataimages.{{ $key }}.categoriasft_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm 
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
                                    <br>
                                    <label class="block mb-2 font-semibold text-gray-900 
                                    dark:text-white">Descripcion                                   
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

                <label class="font-semibold">Seleccione los Archivos PDF</label>
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
                                        class="block mb-2 text-base font-semibold text-gray-900 
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
            class="btn absolute m-2 px-2 btn-primary btn-sm py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none 
            focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>




    </form>
</div>
