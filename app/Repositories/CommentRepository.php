<?php

namespace App\Repositories;

use App\Models\CommentModel;
use App\Models\PostModel;

class CommentRepository
{
    protected $commentModel;

    public function __construct()
    {
        $this->commentModel = CommentModel::class;
    }

    public function createComment(string $postId, array $data)
    {

        $post = PostModel::findOrFail($postId);
        $data['user_id'] = auth()->id();
        return $post->comments()->create($data);
    }
}
