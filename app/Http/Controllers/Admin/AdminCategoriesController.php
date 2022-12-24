<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminCategoriesController extends Controller
{
    public function index()
    {
      $categories = Category::with('children')->whereNull('parent_id')->get();

      return view('admin.categories.index')->with([
        'categories'  => $categories
      ]);
    }
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
                'name'      => 'required|min:3|max:255|string',
                'parent_id' => 'sometimes|nullable|numeric'
        ]);

        Category::create($validatedData);

        return redirect('admin/categories')->withSuccess('You have successfully created a Category!');
    }
    public function update(Request $request, Category $category)
    {
            $validatedData = $this->validate($request, [
                'name'  => 'required|min:3|max:255|string'
            ]);

            $category->update($validatedData);

            return redirect('admin/categories')->withSuccess('You have successfully updated a Category!');
    }
}