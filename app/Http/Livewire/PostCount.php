<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;

class PostCount extends Component
{
    public function render()
    {

            $result = Category::withCount('posts')
                                ->get();
             return view('livewire.post-count', ['postsCount' => $result]);
    }
}
