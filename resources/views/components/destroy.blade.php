<div>
    <x-confirmation-modal wire:model="openModal">
        @slot('title')
            {{ __($title) }}
        @endslot
        @slot('content')
            {{ __($content) }}
        @endslot
        @slot('footer')
            <x-secondary-button class="mr-4">{{ __('CANCELAR') }}</x-secondary-button>
            <x-danger-button wire:click="doDelete">{{ __('SI, ELIMINAR') }}</x-danger-button>
        @endslot
    </x-confirmation-modal>
</div>
