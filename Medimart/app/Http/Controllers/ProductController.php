<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::orderBy("id", "desc")->paginate(10);
        return view('product.index', compact('products'));
    }
    public function create()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('product.create', compact('products'));
    }
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return redirect()->route('product.index')->with('success', 'Product created successfully');
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('product.edit', compact('product', 'products'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }
}
