<section>
    <h1>View Upload</h1>


    @if($post->hasMedia(\App\Models\Post::IMAGE_COLLECTION))
        <div class="hero">
            <div class="relative">
                <img
                    src="{{ $post->getFirstMedia(\App\Models\Post::IMAGE_COLLECTION)->getTemporaryUrl(\Illuminate\Support\Carbon::now()->addDay()) }}"
                    alt="Post Image">

                <div class="z-10 absolute top-0 right-0 p-4">
                    <x-mary-avatar :title="$post->user->name"/>
                </div>
                <p class="z-10 absolute bottom-0 p-4">{{ $post->name }}</p>
            </div>
        </div>
    @else
        <p class="text-error">No Image Found. Something went wrong</p>
    @endif

    <section>
        <h2>Comments</h2>
    </section>
</section>
