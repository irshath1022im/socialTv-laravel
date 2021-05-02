<?php

namespace App\Http\Livewire;

use Meta;
use App\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

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
        Meta::set('title', $post->title);
        // Meta::set('description', 'This is my home. Enjoy!');
        Meta::set('image', 'http://www.socialtv24.info'.Storage::url($post->thumbnail));
        return view('livewire.single-post', ['post' => $post]);
    }
}
