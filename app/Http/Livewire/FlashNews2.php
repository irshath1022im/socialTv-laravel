<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class FlashNews2 extends Component
{
    public $lookingPostFor='trending';
    public $activeTap="trending";

    public function getPosts($id)
    {
        $this->lookingPostFor = $id;
        $this->activeTap = $id;
    }

    public function render()
    {

        $result =Post::where('postType', $this->lookingPostFor)
        ->orderByDesc('created_at')
        ->get()
        ->take(3);

        return view('livewire.flash-news2', ['posts' => $result]);
    }
}
