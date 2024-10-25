<?php
namespace App\Http\Controllers;
use App\Models\Category;

class CategoryController
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        $categories = Category::all();
        return view('components.index', compact('categories'));
    }

    /**
     * Display the specified category.
     */
    public function show(Category $category)
    {
        $tracks = $category->tracks()->paginate(10); // Ajustez la pagination si nécessaire
        return view('components.show', compact('category', 'tracks'));
    }

}
