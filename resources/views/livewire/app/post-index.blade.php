<div class="container">
    <div class="row justify-content-center">
        @foreach($posts as $post)
            <div class="col-md-8 mb-2">
                <div class="card">
                    <div class="card-header"><a href="{{ route('post.show', $post) }}">{{ $post->name }}</a></div>
                    <div class="card-body">
                        {{ $post->body }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

