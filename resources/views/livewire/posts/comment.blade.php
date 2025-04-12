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

    <div class="my-8 py-6 px-4 bg-neutral-content/10 rounded-lg shadow-lg">
        @if ($this->postComments->isEmpty())
            <p class="text-center">No Comments Found</p>
        @else
            @foreach ($this->postComments as $comment)
                <div
                    class="pb-2 {{ $comment->user_id === \Illuminate\Support\Facades\Auth::user()->id ? 'chat chat-end' : 'chat chat-start' }}">
                    <div class="chat-header">
                        {{ $comment->user->name }}
                        <time
                            class="text-xs opacity-50">{{ ceil(\Illuminate\Support\Carbon::create($comment->created_at)->diffInHours(\Illuminate\Support\Carbon::now())) }}
                            hours ago
                        </time>
                    </div>
                    <div class="chat-bubble">{{ $comment->comment }}</div>
                </div>
            @endforeach
        @endif
    </div>
</section>
