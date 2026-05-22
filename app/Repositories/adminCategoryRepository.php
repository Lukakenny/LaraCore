<?php
namespace App\Repositories;



use Illuminate\Support\Str;
use App\Models\CategoryModel;

class adminCategoryRepository
{
 private $categoryModel;

 public function __construct(){
     $this->categoryModel = new CategoryModel();
 }

 public function createCategory($request)
 {
   $this->categoryModel::create([
       'name' => $request->name,
       'slug' => Str::slug($request->name),
   ]);
 }
}
