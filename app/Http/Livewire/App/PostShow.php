<?php

namespace App\Http\Livewire\App;

use App\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $postId, $name,$body;

    public function mount($post)
    {
        if ($post != 'create')
        {
            $this->postId = $post;
            $post = Post::findOrFail($post);
            $this->name = $post->name;
            $this->body = $post->body;
        }
    }

    public function save()
    {
        $post = Post::updateOrCreate(['id' => $this->postId],
        [
            'name' => $this->name,
            'body' => $this->body
        ]);

        $this->postId = $post->id;
    }
    public function render()
    {
        return view('livewire.app.post-show');
    }
}
