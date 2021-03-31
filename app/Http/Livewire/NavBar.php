<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;

class NavBar extends Component
{
    public function render()
    {

        $category = Category::with('subCategory')->get();
        return view('livewire.nav-bar', ['menu'=>$category]);
    }
}
