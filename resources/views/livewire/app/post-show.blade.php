<div class="container" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div wire:loading>
        Processing Payment...
    </div>

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
            <input type="text" class="form-control" id="name" wire:model="post.name">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" wire:model="post.body"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
