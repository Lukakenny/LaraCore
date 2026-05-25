<?php

namespace App\Repositories;


use App\Models\CategoryModel;
use Illuminate\Support\Str;

class adminCategoryRepository
{
    private $categoryModel;


    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function createCategory(array $data)
    {
        $this->categoryModel::create([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
        ]);
    }


    public function getAll()
    {
        return $this->categoryModel::all();
    }

    public function findBySlug(string $slug)
    {

        return $this->categoryModel::where('slug', $slug)->first();
    }
}
