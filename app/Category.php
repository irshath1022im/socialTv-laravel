<?php

namespace App;

use App\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    /**
     * The roles that belong to the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subCategory()
    {
        return $this->hasMany(SubCategory::class, 'categoryId');
    }

    public function posts()
        {
            return $this->hasManyThrough(Post::class,SubCategory::class,'categoryId','subCategoryId','id');
        }
}
