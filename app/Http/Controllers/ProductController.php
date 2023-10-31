<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard', ['products' => $products]);
    }

    public function listing()
    {
        $products = Product::all();
        return view('product', ['products' => $products]);
    }

    public function create(CreateProductRequest $request)
    {

        $data = $request->all();
        if ($request->hasFile('picture')) {
            $path = url('/') . '/storage/product/' . $request->file('picture')->hashName();
            $request->file('picture')->store('public/product');
            $data['picture'] = $path;
        }

        Product::create($data);

        return redirect()->route('dashboard');
    }


    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::find($id);
        $data = $request->all();
          if ($request->hasFile('picture')) {
            $path = url('/') . '/storage/product/' . $request->file('picture')->hashName();
            $request->file('picture')->store('public/product');
            $data['picture'] = $path;
        }
        $product->update($data);
        return redirect()->route('dashboard');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit', ['product' => $product]);
    }
}
