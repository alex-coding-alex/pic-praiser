<section>
    <x-mary-form wire:submit="save">
        <x-mary-input label="Name" wire:model="form.name"/>

        <x-mary-file wire:model="form.image" label="Image" hint="Your Pic to Praise" accept="image/*"/>

        @if ($this->form->image)
            <img src="{{ $this->form->image->temporaryUrl() }}" alt="">
        @endif

        <x-slot:actions>
            <x-mary-button class="btn-primary" label="Save" type="submit" spinner="save"/>
        </x-slot:actions>
    </x-mary-form>
</section>
