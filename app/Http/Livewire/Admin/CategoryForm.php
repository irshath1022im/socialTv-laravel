<?php

namespace App\Http\Livewire\Admin;

use App\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class CategoryForm extends Component
{
    public $category;
    public $thumbnail;
    public $file;
    public $editCategoryId;
    public $editCategory;
    public $formMode;
    use WithFileUploads;

    protected $listeners=[
        'editCategoryRequest',
        'resetEditCategoryId',
        'updateFormMode'
    ];

    protected $rules = [
        'category' => 'required|unique:categories,category',
        'thumbnail' => 'required|mimes:png,jpeg', // 1MB Max
    ];

    public function updateFormMode($formMode)
    {
        $this->formMode = $formMode;
    }


    public function resetForm()
    {
        $this->category = '';
        $this->thumbnail = '';
        $this->editCategoryId= '';
        $this->editCategory = '';
        $this->formMode="create";
        $this->resetErrorBag();
    }

    public function AddNewCategory()
    {
         $this->validate();

            $this->file = $this->thumbnail->store('categoryThumbnails', 'public');
            // dump($file);

            $newCategory = [
                'category' => $this->category,
                'thumbnail' => $this->file
            ];
            Category::create($newCategory);
    }



    public function editCategoryRequest($categoryId)
    {
        $this->editCategoryId = $categoryId;
        $result = Category::findOrFail($categoryId);
        $this->category= $result->category;
        $this->thumbnail = $result->thumbnail;
        $this->dispatchBrowserEvent('showCategoryForm');

    }




    public function resetEditCategoryId()
    {
       $this->resetForm();
    }

    public function saveData()
    {

        if($this->formMode === 'create'){
            $this->AddNewCategory();
            session()->flash('status','New Category Added');
            $this->resetForm();
        } elseif($this->formMode === 'edit'){
            if($this->thumbnail !== $this->thumbnail){
                $this->file = $this->thumbnail->store('categoryThumbnails', 'public');
            }else {
                $this->file = $this->thumbnail;
            }

            $data =['category' => $this->category, 'thumbnail' => $this->file];
            Category::where('id', $this->editCategoryId)->update($data);
            session()->flash('status','Updated');
            $this->resetForm();
        }
    }

    public function render()
    {
        return view('livewire.admin.category-form');
    }
}
