<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Subir fotos') }}
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
<div class="m-8 w-full">
    <h2>subir fotos</h2>
    @livewire('images-test')
</div>

</x-app-layout>