<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class SubCategoryRelatedPosts extends Component
{
    public $subCategoryId;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount($subCategoryId)
    {
        $this->subCategoryId = $subCategoryId;

    }



    public function render()
    {
        return view('livewire.sub-category-related-posts',[
            'relatedPosts' => Post::where('subCategoryId', $this->subCategoryId)->orderByDesc('created_at')->simplePaginate(5)]);
    }
}
