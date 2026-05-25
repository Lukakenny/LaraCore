<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\adminAddCategory;
use App\Models\PostModel;
use App\Repositories\adminCategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryRepo;

    public function __construct()
    {
        $this->categoryRepo = new adminCategoryRepository();

    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $categories = $this->categoryRepo->getAll();


        $postsQuery = PostModel::latest();

        $selectedCategory = $request->has('filter')
            ? $this->categoryRepo->findBySlug($request->filter)
            : null;

        if ($selectedCategory) {

            $postsQuery->where('category_id', $selectedCategory->id);
        }

        $posts = $postsQuery->get();
        return view('admin/adminCategory', compact('categories', 'posts'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(adminAddCategory $request)
    {
        $this->categoryRepo->createCategory($request->validated());
        return redirect()->route('admin.categories.index');
    }


}
