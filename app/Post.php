<?php

namespace App;

use App\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

 /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'subCategoryId');
    }


}
