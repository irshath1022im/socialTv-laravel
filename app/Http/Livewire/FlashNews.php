<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class FlashNews extends Component
{



    public function render()
    {
        $result = Post::with(['subCategory' => function($query){
                        return $query->with('category')->get();
                     }])
                ->orderByDesc('created_at')
                ->get()
                ->take(5);

        // $sorted = $result->sortByDesc('created_at');
        // $sorted = $result->sortBy(function ($product, $key) {
        //     return count($product['created_at']);
        // });

        return view('livewire.flash-news', ['posts'=> $result]);
    }
}
