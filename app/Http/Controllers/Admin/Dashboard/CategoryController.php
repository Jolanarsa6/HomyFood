<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        $categories = $admin->categories()->get();

        return view('admin.productTypes', compact('categories'));
    }

    public function destroy(int $category_id)
    {
        $admin = Auth::guard('admin')->user();
        $category = Category::find($category_id);
        if ($category->admin_id == $admin->id) {
            $category->delete();
        }

        return redirect()->route('admin.show_product_types');
    }

    public function edit(Request $request)
    {
        $category = $request->validate([
            'name' => 'string|max:50|required',
            'description' => 'string|nullable|max:500'
        ]);
        $admin_id = Auth::guard('admin')->user()->id;
        $category['admin_id'] = $admin_id;
        Category::create($category);
        return redirect()->route('admin.show_product_types');
    }
}
