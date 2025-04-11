<section>
    <h1>View Upload</h1>
    <p>
        {{ $post->name }}
    </p>


    @if($post->hasMedia(\App\Models\Post::IMAGE_COLLECTION))
        <img
            src="{{ $post->getFirstMedia(\App\Models\Post::IMAGE_COLLECTION)->getTemporaryUrl(\Illuminate\Support\Carbon::now()->addDay()) }}"
            alt="Post Image"/>

    @endif

    <section>
        <h2>Comments</h2>
    </section>
</section>
