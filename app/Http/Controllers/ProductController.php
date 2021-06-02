<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductPhoto;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('updated_at', 'desc')->paginate(5);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $pictures = $request->file('pictures');

        $product = Product::create([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'description' => $request->input('description'),
            'price'=> $request->input('price'),
            'brand' => $request->input('brand'),
            'qty' => $request->input('qty'),
            'category_id' => $request->input('category_id')
        ]);

        if($pictures != null) {
            foreach ($pictures as $picture) {
                ProductPhoto::create([
                    'image_url' => $picture->store('images/products'),
                    'product_id' => $product->id
                ]);
            }
        }
        return redirect()->route('products.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {

        Product::findOrFail($id)->update([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'description' => $request->input('description'),
            'price'=> $request->input('price'),
            'brand' => $request->input('brand'),
            'qty' => $request->input('qty'),
            'category_id' => $request->input('category_id')
        ]);
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->back();
    }
}
