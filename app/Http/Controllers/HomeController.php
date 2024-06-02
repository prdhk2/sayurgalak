<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;



class HomeController extends Controller
{
    public function index() 
    {
        $title = 'Beranda';

        $products = Product::all();
        $totalStock = $products->sum('stock');
        $user = Auth::user();
        $name = $user->name;
    
        return view("admin.dashboard", compact('title', 'name', 'products', 'totalStock'));
    }

    public function new_order()
    {
        $title = 'Pesanan baru';

        return view("admin.orders-management.NewOrder", compact('title'));
    }

    public function pending_order()
    {
        $title = 'Order Tertunda';

        return view("admin.orders-management.PendingOrder", compact('title'));
    }

    public function shipping_order()
    {
        $title = 'Pesanan Di kirim';

        return view("admin.orders-management.OrderShipping", compact('title'));
    }

    public function order_done()
    {
        $title = 'Pesanan Selesai';

        return view("admin.orders-management.OrderDone", compact('title'));
    }

    public function userdetail()
    {
        $title = 'Profil Pengguna';

        return view("admin.UserDetail", compact('title'));
    }

    public function point_of_sale()
    {
        $title = 'Print Struk Pesanan';

        return view("admin.orders-management.PointOfSale", compact('title'));
    }
}
