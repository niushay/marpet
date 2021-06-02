<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::orderBy('updated_at','desc')->paginate(5);
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Category::create([
            'title' => $request->input('title'),
            'super_category_id' => $request->input('super_category_id')
        ]);
        return view('categories.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categories_super = Category::all();
        $category = Category::findOrFail($id);
        return view('categories.edit', compact(['categories_super', 'category']));
    }

    public function update(Request $request, $id)
    {
        Category::findOrFail($id)->update([
            'title' => $request->input('title'),
            'super_category_id' => $request->input('super_category_id'),
        ]);
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->back();
    }
}
