<?php

namespace App\Http\Livewire\App;

use App\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $post, $name,$body;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->name = $post->name;
        $this->body = $post->body;
    }

    public function update()
    {
        $this->post->update([
            'name' => $this->name,
            'body' => $this->body
        ]);
    }
    public function render()
    {
        return view('livewire.app.post-show');
    }
}
