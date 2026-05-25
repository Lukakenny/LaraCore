<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostModel extends Model
{
    protected $table = 'lara_posts';


    protected $fillable = [
        'title', 'user_id', 'category_id', 'slug', 'body'
    ];

    public function category()
    {
        return $this->belongsTo(CategoryModel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(CommentModel::class, 'post_id');
    }
}
