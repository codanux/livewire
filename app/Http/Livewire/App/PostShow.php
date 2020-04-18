<?php

namespace App\Http\Livewire\App;

use App\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $post = [];

    public function mount($post)
    {
        if ($post = Post::find($post))
        {
            $this->post = $post->toArray();
        }
    }

    public function save()
    {
        if (isset($this->post['id']))
        {
            Post::find($this->post['id'])->update($this->post);
            session()->flash('message', 'update');
        }
        else
        {
            $this->post = Post::create($this->post)->toArray();
            session()->flash('message', 'create');
        }
    }

    public function render()
    {
        return view('livewire.app.post-show');
    }
}
