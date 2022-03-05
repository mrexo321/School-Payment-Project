<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('index');

    }

    public function category()
    {
        $categories = Category::all();
        $latestCategory = Category::latest()->first();
        // dd($latestCategory);
        return view('categories.index' , compact('categories' , 'latestCategory'));
    }

    public function showCategory(Category $category)
    {

        return view('categories.show' , compact('category'));
    }
}
