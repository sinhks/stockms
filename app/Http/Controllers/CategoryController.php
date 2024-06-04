<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function create(){
        return view('categories.create');
    }
    public function store(Request $request){
        $request->validate([
            'category_name' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        Category::create($request->all());

        return redirect()->route('categories.create')->with('success', 'Category created successfully');
    }
}
