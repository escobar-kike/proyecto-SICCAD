<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 dark:text-gray-200 leading-tight">
            {{ __('Nuevo Dictamen') }}
        </h2>
    </x-slot>
    @if ($errors->any())
    <div class="alert alert-danger m-8">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('dictamenes.store')}}" method="POST">
        @csrf

    <br>
    <div class="m-8 w-full">
        <label for="descripcion" class="text-lg text-base/15 font-bold m-4 text-black-900 w-50%">Descripción:</label>
        <input type="text" required id="descripcion" name="descripcion" class="rounded-lg p-2 w-1/4">
    </div>
      

    
    <!-- tailwind css -->
  

    <div class="m-12 w-full">

        <button type="submit" class="bg-blue-700 hover:bg-blue-900 text-white font-bold fonr-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>

        </div>
    
</form>
</x-app-layout>