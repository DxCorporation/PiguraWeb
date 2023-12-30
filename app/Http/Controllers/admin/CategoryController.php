<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index', [
            'categories'    => Category::latest()->get()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'  => 'required|min:3'
        ]);
        $data['slug'] = Str::slug($data['nama']);

        Category::create($data);
        return back()->with('success', 'Category successfully added');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama'  => 'required|min:3'
        ]);
        $data['slug'] = Str::slug($data['nama']);

        Category::find($id)->update($data);
        return back()->with('success', 'Category successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return back()->with('success', 'Category successfully Deleted');
    }
}
