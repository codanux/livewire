<?php

namespace App\Http\Livewire\App;

use App\Post;
use Livewire\Component;

class PostIndex extends Component
{
    public $posts;

    public function mount(){
        $this->posts = Post::all();
    }

    public function render()
    {
        return view('livewire.app.post-index');
    }
}
