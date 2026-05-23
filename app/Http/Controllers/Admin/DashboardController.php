<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = PostModel::all();
        $categories = CategoryModel::all();
        $users = User::all();

        return view('admin/admin',compact('posts','categories','users'));
    }
}
