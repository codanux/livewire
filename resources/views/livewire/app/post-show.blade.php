<div class="container" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <form wire:submit.prevent="save">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('post.name') is-invalid @enderror" id="name" wire:model="post.name">
            @error('post.name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control @error('post.body') is-invalid @enderror" id="body" wire:model="post.body"></textarea>
            @error('post.body')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <div class="form-group">
            <label for="created_at">created_at</label>
            <input type="date" class="form-control" id="created_at" wire:model="post.created_at">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div wire:loading wire:target="save">
        Data Kaydediliyor
    </div>
</div>
