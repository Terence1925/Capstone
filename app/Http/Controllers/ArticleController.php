<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return response()->json($articles);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'body' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        $article = Article::create($request->all());

        return response()->json($article, 201);
    }

    public function show(Article $article)
    {
        return response()->json($article);
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'body' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
