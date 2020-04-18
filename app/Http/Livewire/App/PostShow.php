<?php

namespace App\Http\Livewire\App;

use App\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $post;

    public function mount($post)
    {
        if ($post != 'create')
        {
            $this->post = Post::find($post)->toArray();
        }
    }

    public function save()
    {
        Post::updateOrCreate(['id' => $this->post['id']], $this->post);
        session()->flash('message', 'update');
    }

    public function render()
    {
        return view('livewire.app.post-show');
    }
}
