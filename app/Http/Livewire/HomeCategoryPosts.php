<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;

class HomeCategoryPosts extends Component
{
    public function render()
    {

        $result = Category::with(['posts' => function($query){
            return $query->orderByDesc('created_at');
        }])->get();

        return view('livewire.home-category-posts',['homeAdds' => $result]);
    }
}
