<?php

namespace App\Http\Controllers;

use App\Models\Categroy;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function view_category()
    {
        return view("admin.category");
    }
    public function add_category(Request $request)
    {

        $category = new Categroy;

        $category->category_name = $request->input('category');
        $category->save();

        return redirect()->back();
    }
}
