<?php

namespace App\Http\Livewire\Admin;

use App\Category;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Categories extends Component
{

    use AuthorizesRequests;

    public $categories;
    public $editCategoryId;
    public $deleteCategoryId;



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

    public function deleteCategoryRequest($categoryId)
    {
        $this->deleteCategoryId = $categoryId;
        $this->dispatchBrowserEvent('showDeleteModal');
    }

    public function deleteCategory()
    {

        $this->authorize('deleteCategory');
        Category::where('id', $this->deleteCategoryId)->delete();
        session()->flash('status','Deleted');
        $this->dispatchBrowserEvent('closeDeleteModal');
        $this->refreshCategories();

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

        return view('livewire.admin.categories', ['categories' => $this->categories])->extends('layouts.admin')->section('content');
    }
}
