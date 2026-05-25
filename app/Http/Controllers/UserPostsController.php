<?php

namespace App\Http\Controllers;

use App\Http\Requests\userAddPost;
use App\Http\Requests\userUpdatePostRequest;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Repositories\UserPostsRepository;
use Illuminate\Http\Request;

class UserPostsController extends Controller
{

    private $postRepo;

    public function __construct()
    {
        $this->postRepo = new UserPostsRepository();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = PostModel::with(['user', 'category'])
            ->latest()
            ->paginate(20);
        $categories = CategoryModel::all();
        return view('user/homePage', compact('categories', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(userAddPost $request)
    {
        $this->postRepo->createPost($request->validated());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id)
    {
        $categories = CategoryModel::all();
           $post = $this->postRepo->editPost($id);

               return view('user/updatePost', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(userUpdatePostRequest $request, string $post)
    {
        $this->postRepo->updatePost($post, $request->validated());
        return redirect()->route('user.myPosts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id)
    {
         $this->postRepo->deletePost($id);

        return redirect()->back();
    }

    public function myPosts()
    {

       $posts = $this->postRepo->getUserPosts(auth()->id());

        return view('user/myPosts',compact('posts'));
    }
}
