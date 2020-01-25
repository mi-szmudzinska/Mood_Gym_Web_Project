<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        return view('admin.orders.index', ['orders' => Order::all()]);
    }
}
