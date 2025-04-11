<section>
    <x-mary-form wire:submit="save">
        <x-mary-input label="Name" wire:model="form.name"/>

        <x-slot:actions>
            <x-mary-button class="btn-primary" label="Save" type="submit" spinner="save"/>
        </x-slot:actions>
    </x-mary-form>
</section>
