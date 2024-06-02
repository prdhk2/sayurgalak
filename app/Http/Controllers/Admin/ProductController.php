<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{

    public function create()
    {
        $title = 'Tambahkan Produk';

        $products = Product::all();
        $categories = Category::all();

        return view('admin.product-management.addProduct', compact('title', 'products', 'categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'date_in' => 'required|date',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] = $imageName;
        }

        Product::create($validated);

        return redirect()->route('products.create')->with('success', 'Product added successfully.');
    }
}
