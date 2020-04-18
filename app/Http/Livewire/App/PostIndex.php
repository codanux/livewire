<?php

namespace App\Http\Livewire\App;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.app.post-index', [
            'posts' => Post::paginate(1),
        ]);
    }
}
