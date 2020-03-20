<div>
    Postlar
    @foreach($posts as $post)
        <a href="{{ route('post.show', $post) }}"> {{ $post->name }} </a>
    @endforeach
</div>
