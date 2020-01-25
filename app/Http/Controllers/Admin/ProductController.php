<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index', ['products' => Product::paginate(10)]);
    }

    public function edit($id)
    {
        return view('admin.products.edit' , [
            'product' => Product::find($id),
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request)
    {
        $message  = '';
        if(isset($request->id)){
            $message = 'Produkt został zaktualizowany !';
        }else{
            $message = 'Produkt został dodany pomyślnie !';
        }
        Product::updateOrCreate(['id' => $request->id], $request->all());


        return back()->with('success', $message);
    }

    public function delete(Request $request)
    {
        Product::destroy($request->id);
        return back()->with('success', 'Produkt został usunięty pomyslnie !');
    }
}
