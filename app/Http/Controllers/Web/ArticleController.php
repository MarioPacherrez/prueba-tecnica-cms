<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\Article;
use App\Models\User;
use App\Models\Image;
use Laracasts\Flash\Flash;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'DESC')->paginate(20);
        $articles->each(function($articles) {
            $articles->categories;
            $articles->users;
        });
        return view('admin.articles.index')->with('articles', $articles);
    }

    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name');
        $users = User::orderBy('name', 'ASC')->pluck('name');
        return view('admin.articles.create')->with('categories', $categories)->with('users', $users);
    }

    public function store(Request $request)
    {
        if($request->file('image'))
        {
            $file = $request->file('image');
            $name = 'cms_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/images/articles/';
            $file->move($path, $name);
        }

        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article->status = 'Despublicado';
        $article->save();

        $article->categories()->sync($request->categories);

        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);
        $image->save();

        flash('Se ha creado el artículo: '.$article->title.'. de forma satisfactoria!', 'success')->important();
        return redirect()->route('articles.index');
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