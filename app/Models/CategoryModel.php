<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
   protected $table ="categories";

   protected $fillable =[
       'name','slug'
   ];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function posts()
    {
        return $this->hasMany(PostModel::class);
    }
}
