<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function user_profile()
    {
        return view('profile.edit' , ['user' => Auth::user()]);
    }

    public function user_profile_edit(Request $request)
    {
        $user = User::find(Auth::id());
        $user->update($request->all());

        return redirect()->back()->with('success' , 'Zaminy zapisane pomyślnie');
    }
    public function user_change_password()
    {
        return view('profile.password_change');
    }

    public function user_change_password_edit(Request $request)
    {
        $password = Auth::User()->password;

        $this->validate($request, [
            'password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        if (!isset($request->password)){

            return back()->with('error', 'You have entered wrong password');

        } else {

            return "Hasł zostało zmienione!";

        }
    }

    public function show_products()
    {
        return view('products.index', ['products'=> Product::all() , 'categories' => Category::all()]);
    }

    public function show_product($id)
    {
        return view('products.show', ['product' => Product::find($id)]);
    }

    public function show_orders()
    {
        return view('orders.index', ['orders' => Order::all()]);
    }

    public function order_create(Request $request)
    {
        Order::create($request->all());

        return back()->with('success', 'Zamówiono produkt');
    }

}
