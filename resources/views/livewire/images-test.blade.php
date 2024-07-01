<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <form wire:submit.prevent="save">
        <input type="file" wire:model="photo">
     
        @error('photo') <span class="error">{{ $message }}</span> @enderror
     
        <button type="submit">Save Photo</button>
    </form>
</div>
