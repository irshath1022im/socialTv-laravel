<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $fillable=['subCategory', 'thumbnail','categoryId'];
    /**
     * Get the user that owns the SubCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'subCategoryId');
    }
}
