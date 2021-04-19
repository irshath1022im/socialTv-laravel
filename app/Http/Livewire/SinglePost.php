<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class SinglePost extends Component
{
    public $postId;

    protected $listeners = [
        'getThePost'
    ];


    public function getThePost($postId)
    {

        $this->dispatchBrowserEvent('changeUrl', $postId);
        $this->postId = $postId;
    }

    public function mount($postId)
    {
        $this->postId = $postId;
    }

    public function render()
    {

        $post = Post::findOrFail($this->postId);
        return view('livewire.single-post', ['post' => $post]);
    }
}
