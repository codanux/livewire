<div class="container">
    <form wire:submit.prevent="update">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" wire:model="name">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" wire:model="body">

            </textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
