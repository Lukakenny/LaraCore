<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\adminAddCategory;
use App\Models\CategoryModel;
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
        // 1. Uzimamo sve kategorije iz baze za gornji meni (ili koristi svoj Repo ako ga imaš)
        $categories = \App\Models\CategoryModel::all();

        // 2. Spremamo upit za postove (uzimamo najnovije)
        $postsQuery = \App\Models\PostModel::latest();

        // 3. Proveravamo da li u URL-u postoji reč 'filter'
        if ($request->has('filter')) {
            // Nalazimo kategoriju po onom "slugu" o kom smo pričali
            $selectedCategory = \App\Models\CategoryModel::where('slug', $request->filter)->first();

            if ($selectedCategory) {
                // Ako je nađena kategorija, filtriraj postove samo za nju!
                $postsQuery->where('category_id', $selectedCategory->id);
            }
        }

        // 4. Izvršavamo upit i dobijamo postove
        $posts = $postsQuery->get();

        // 5. Šaljemo sve u tvoj prelepi stakleni view
        return view('admin/adminCategory', compact('categories', 'posts'));
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
    public function store( adminAddCategory $request)
    {
        $this->categoryRepo->createCategory($request);
        return redirect()->route('admin.categories.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
