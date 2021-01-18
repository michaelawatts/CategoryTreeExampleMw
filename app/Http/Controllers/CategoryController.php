<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $parentCategories = Category::where('parent_id',0)->get();

        return view('categoryTreeview', compact('parentCategories'));
    }
  }