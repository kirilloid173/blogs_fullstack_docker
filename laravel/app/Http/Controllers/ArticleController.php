<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return response()->json([
            'articles' => Article::all(),
        ]);
    }

    public function store(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'content' => ['required', 'string'],
        ]);

        $article->create($validated);

        return response()->json(['message' => 'Блог успешно создан']);
    }

    public function show(string $id)
    {
        $article_data = Article::with('comments')->find($id);

        return response()->json(['article_data' => $article_data]);
    }
}
