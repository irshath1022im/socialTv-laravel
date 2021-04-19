<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class SubCategoryRelatedPosts extends Component
{
    public $subCategoryId;

    public function mount($subCategoryId)
    {
        $this->subCategoryId = $subCategoryId;

    }



    public function render()
    {
        return view('livewire.sub-category-related-posts',[
            'relatedPosts' => Post::where('subCategoryId', $this->subCategoryId)->orderByDesc('created_at')->get()->take(5)]);
    }
}
