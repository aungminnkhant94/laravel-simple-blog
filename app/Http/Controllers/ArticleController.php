<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::latest()->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function detail($id)
    {
        $article = Article::findOrFail($id);
        return view ("articles.detail",compact('article'));
    }
}
