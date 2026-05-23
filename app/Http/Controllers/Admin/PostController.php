<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = PostModel::latest()->paginate(20);


        return view('admin/adminPosts', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(PostModel $post)
    {
        return view('admin/adminSinglePost', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( PostModel $post)
    {
        $post->delete();
        return redirect()->back();
    }
}
