<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::latest()->get();

        return view( view:'index',
            compact(var_name: 'categories', ...var_names: 'posts'));
    }
}