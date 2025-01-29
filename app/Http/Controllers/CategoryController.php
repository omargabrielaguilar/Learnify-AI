<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(CategoryRequest $request)
    {
        return Category::create($request->validated());
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return $category;
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json();
    }
}
