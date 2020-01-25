<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderStatus;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        return view('admin.orders.index', ['orders' => Order::all()]);
    }

    public function status_index()
    {
        return view('admin.orders.status_index',  ['orderStatus' => OrderStatus::all()]);
    }

    public function add(Request $request)
    {
        dd($request);
    }
}
