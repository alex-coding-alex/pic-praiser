<section>
    <h2>Comments</h2>

    @if (\Illuminate\Support\Facades\Auth::check())
        <x-mary-form wire:submit="save" no-separator>
            <x-mary-textarea label="Your Comment" wire:model="form.comment" placeholder="Here..."
                             hint="Max 1000 characters" rows="5"/>

            <x-slot:actions>
                <x-mary-button label="Submit Comment" class="btn-primary" type="submit" spinner="save"/>
            </x-slot:actions>
        </x-mary-form>
    @else
        <x-mary-button label="Login to Comment" link="{{ route('login') }}"/>
    @endif

    @foreach ($this->postComments as $comment)
        {{ $comment->comment }}
    @endforeach
</section>
