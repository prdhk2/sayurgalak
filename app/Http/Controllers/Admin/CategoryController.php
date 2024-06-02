<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Kategori';

        $categories = Category::all();
        return view('admin.category-management.addCategory', compact('categories', 'title'));
    }

    public function create()
    {
        // This method is used to display the form for creating a new category
        return view('admin.category-management.createCategory');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255|unique:categories',
        ]);

        // Create a new category
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Category added successfully!');
    }

    // Add methods for edit, update, and delete if needed
}
