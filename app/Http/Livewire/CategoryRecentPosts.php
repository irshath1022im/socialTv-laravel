<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;

class CategoryRecentPosts extends Component
{

    public $categoryId;
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

    }

    public function mount($categoryId)
    {
        $this->categoryName = $categoryId;

    }

    public function render()
    {

        $this->posts = Category::with(['posts' => function($query){
            return $query->orderByDesc('created_at')->take(3);
        }])
        ->where('id',$this->categoryId)
        ->get();


        return view('livewire.category-recent-posts');
    }
}
