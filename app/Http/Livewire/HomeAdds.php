<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;

class HomeAdds extends Component
{


    public function render()
    {

        $result = Category::with(['posts' => function($query){
            return $query->orderByDesc('created_at');
        }])->get();

        // $this->emit('getCategoryPosts');
        return view('livewire.home-adds', ['homeAdds' => $result]);
    }
}
