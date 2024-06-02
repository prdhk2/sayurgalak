<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class WebController extends Controller
{
    public function index() {
        
        $user = Auth::user();
        $name = $user ? $user->name : 'Guest';

        $products = Product::all();
        $categories = Category::all();

        return view('FrontEnd.index', compact('name', 'products', 'categories'));
    }
}
