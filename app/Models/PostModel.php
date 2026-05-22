<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'lara_posts';

     protected $fillable = [
       'title','user_id','category_id','slug','body'
     ];

    public function category()
    {
        return $this->belongsTo(CategoryModel::class);
    }
}
