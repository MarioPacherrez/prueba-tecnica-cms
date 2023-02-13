<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Laracasts\Flash\Flash;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::orderBy('created_at', 'DESC')->get();
        $images->each(function ($images) {
            $images->article;
        });
        return view('admin.images.index')->with('images', $images);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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