<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <form wire:submit.prevent="save">

        <label for="countries"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dictamen</label>
        <select id="countries" name="dictamenes_id" wire:model="dictamenes_id"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="">Seleccione...</option>
        @forelse ($this->Dictamenes as $dicta)
            <option value="{{ $dicta->id }}">{{ $dicta->descripcion }} </option>
            @empty
        @endforelse

        </select>
        <br>
        <label >subir foto</label>
        <br>

        <input accept="application/pdf" class="block w-80 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
         type="file" wire:model="pdf">
     
        @error('pdf') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class="btn m-2 px-2 btn-primary btn-sm py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none 
        focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subir</button>
    
        <br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            DICTAMENES
                        </th>
                        <th scope="col" class="px-6 py-3">
                            PDF
                        </th>

                        <th scope="col" class="px-6 py-3">
                            ACCION
                        </th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
     
        </form>
</div>
