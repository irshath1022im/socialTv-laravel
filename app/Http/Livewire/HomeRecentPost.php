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
        $result = Post::with(['subCategory' => function($query) {
            return $query->with('category')->get();
                        }])
                   ->orderByDesc('created_at')
                   ->simplePaginate(5);
        return view('livewire.home-recent-post', ['posts'=>$result]);
    }
}
