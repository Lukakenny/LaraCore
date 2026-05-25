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

    public function getUserPosts($id)
    {
        return $this->postModel::where('user_id', $id)
            ->latest()
            ->paginate(20);
    }

    public function deletePost($id)
    {
        $post = PostModel::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        return $post->delete();
    }

    public function editPost($id)
    {
        return PostModel::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();
    }

    public function updatePost($post, array $data)
    {
        $post = \App\Models\PostModel::where('id', $post)
            ->where('user_id', auth()->id())
            ->firstOrFail();
    return $post->update($data);
    }
}

