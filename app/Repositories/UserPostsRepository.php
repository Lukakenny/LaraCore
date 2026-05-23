<?php
namespace  App\Repositories;


use App\Models\PostModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserPostsRepository
{
    private $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    public function createPost(array $data)
    {

        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($data['title']);
        return $this->postModel::create($data);
    }
}

