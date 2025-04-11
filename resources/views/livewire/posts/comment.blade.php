<section>
    <h2>Comments</h2>

    <p>
        {{ $post->name }}
    </p>

    @foreach ($this->postComments as $comment)
        {{ $comment->comment }}
    @endforeach
</section>
