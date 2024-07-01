<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <form wire:submit.prevent="save">
        
        <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Señas
                Particulares</label>
            <div class="flex items-center mr-4">
                <input id="inline-radio" type="radio" value="" name="señas"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-radio"
                    class="ml-2 flex text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
            </div>
            <div class="flex items-center mr-4">
                <input id="inline-2-radio" type="radio" value="" name="señas"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-2-radio"
                    class="ml-2 flex text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
            </div>
            <div>
                <label for="last_name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                <textarea id="message" rows="4" name="descripcion" wire:model="descripcion"
                    class="block p-2.5 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required></textarea>
            </div>
        </div>
        <br>
        <label >Seleccione la foto</label>
        <input accept="image/*" class="block w-80 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" wire:model="photo">
     
        @error('photo') <span class="error">{{ $message }}</span> @enderror <br>

        <div>
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione
            la seña particular</label>
        <select id="countries" name="cuerpos_id" wire:model="cuerpos_id"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="">Seleccione</option>
            @forelse ($this->CategoFotos as $catefotos)
                <option value="{{ $catefotos->id }}">{{ $catefotos->descripcion }}</option>
                @empty
            @endforelse
        </select>

        <button type="submit" class="btn m-2 px-2 btn-primary btn-sm py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none 
        focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subir</button>

        <br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tipo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripcion
                        </th>
                        <th scope="col" class="px-6 py-3">
                            IMG
                        </th>

                        <th scope="col" class="px-6 py-3">
                            ACCION
                        </th>
                    </tr>
                </thead>
                   
                
               
            </table>
                </div>

    </div>

        
    </form>
</div>
