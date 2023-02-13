<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Laracasts\Flash\Flash;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name','ASC')->paginate(5);
        return view('admin.categories.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $category = new Category($request->all());
        $category->save();

        flash('La categoría: '.$category->name.' ha sido creada con exito!', 'success')->important();
        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}