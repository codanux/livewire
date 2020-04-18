<?php

namespace App\Http\Livewire\App;

use App\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $post = [];

    public function mount(Post $post)
    {
        $this->post = $post->toArray();
    }

    public function save()
    {
        $this->validate([
            'post.name' => 'required',
            'post.body' => 'required'
        ],[],[
            'post.name' => 'Post Adı',
            'post.body' => 'İçerik'
        ]);

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
