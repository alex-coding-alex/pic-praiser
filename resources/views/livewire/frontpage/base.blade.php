<section>
    @if ($this->randPost())
        <livewire:posts.post-view :post="$this->randPost()"/>
    @else
        <p>Nobody has made a Post yet</p>
        <p>Be the first to Post!</p>
    @endif

</section>
