<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;

class CategoryRecentPosts extends Component
{

    public $categoryId = 2;
    public $categoryName;
    public $posts=[];

    protected $listeners=[
        'getCategoryPosts'
    ];


    // public function getIncrement()
    // {
    //     $this->count = $this->count + 1;
    // }

    public function getCategoryPosts($id)
    {
        $this->posts = Category::with(['posts' => function($query){
            return $query->orderByDesc('created_at')->take(3);
        }])
        ->where('id',$id)
        ->get();
    }

    // public function mount($id)
    // {
    //     $this->categoryName = $id;

    // }

    public function render()
    {



        return view('livewire.category-recent-posts');
    }
}
