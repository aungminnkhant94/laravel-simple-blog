<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\storeArticleRequest;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::latest()->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function add()
    {
        $categories = Category::all();
        return view ('articles.add',compact('categories'));
    }

    public function create(storeArticleRequest $id)
    {
        $validator = validator(request()->all(),[
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $article = new Article;
        $article->title = request()->title;
        $article->body = request()->body;
        $article->category_id = request()->category_id;
        $article->save();

        return redirect('/articles');
    }

    public function detail($id)
    {
        $article = Article::find($id);
        return view ("articles.detail",compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $category = Category::all();
        return view ("articles.edit",[
            'article' => $article,
            'categories' => $category
        ]);
    }

    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required'
        ]);

        Article::whereId($id) -> update($validatedData);

        return redirect('/articles');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('/articles',)->with('info','Article Deleted');

    }
}
