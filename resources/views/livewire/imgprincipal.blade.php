<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <form >

        <input accept="image/*" class="block w-80 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" wire:model="photo">
     
        @error('photo') <span class="error">{{ $message }}</span> @enderror
        <br>
        <br>
        <div wire:loading wire:target="photo" class=" mb-4 bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">¡Imagen Cargando!</strong>
            <span class="block sm:inline">Espere un momento hasta que la imagen se haya cargado.</span>
            
          </div>
        @if ($photo)
                  <img src="{{$photo->temporaryUrl()}}" height="250" width="300" >
              @endif
        <button wire:click.prevent="save" type="button" class="btn m-2 px-2 btn-primary btn-sm py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none 
        focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar Foto</button>
    </form>
</div>
