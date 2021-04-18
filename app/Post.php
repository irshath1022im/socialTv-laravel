<?php

namespace App;

use App\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'content', 'thumbnail', 'postType', 'subCategoryId'];

 /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'subCategoryId');
    }

    public function category()
    {
        return $this->hasOneThrough('App\Category', 'App\SubCategory', 'categoryId','id','subCategoryId');
    }


}
