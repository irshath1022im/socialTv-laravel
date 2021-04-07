<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class HomeRecentPost extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $result = Post::with('subcategory')->orderByDesc('id')->paginate(10);
        return view('livewire.home-recent-post', ['posts'=>$result]);
    }
}
