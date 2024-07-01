<div>
    {{-- Stop trying to control. --}}
    <x-danger-button wire:click="confirmDestroy('{{ $id }}', '{{ $description }}')"
        wire:key="{{ $id }}"><i class="fa fa-trash"></i>ELIMINAR</x-danger-button>
</div>
