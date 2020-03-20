<?php

namespace App\Http\Livewire\App;

use App\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.app.post-show');
    }
}
