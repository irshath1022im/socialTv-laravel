<?php

namespace App\Http\Livewire\Admin;

use App\Category;
use Livewire\Component;

class Categories extends Component
{

    public $categories;
    public $editCategoryId;



    public function createCategory()
    {
        $this->emit('updateFormMode', 'create');
        $this->dispatchBrowserEvent('showCategoryForm');
    }

    public function editCategoryRequest($categoryId)
    {
        // $this->editCategoryId = $categoryId;

        // $this->formMode = 'edit';
        $this->emit('updateFormMode', 'edit');
        $this->emit('editCategoryRequest', $categoryId);
    }

    public function closeCategoryForm(){
        $this->refreshCategories();
        $this->emit('resetEditCategoryId');

    }

    public function mount()
    {
        $this->categories = Category::orderByDesc('id')->get();
    }

    public function refreshCategories()
    {
        $this->categories = Category::orderByDesc('id')->get();
    }

    public function render()
    {

        return view('livewire.admin.categories', ['categories' => $this->categories]);
    }
}
