<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Comment $comment)
    {

        $validated = $request->validate([
            'article_id' => ['required', 'exists:articles,id'],
            'author_name' => ['required', 'string', 'max:50'],
            'content' => ['required', 'string'],
        ]);

        $comment->create([
            'article_id' => $request->id,
            'author_name' => $validated['author_name'],
            'content' => $validated['content'],
        ]);

        return response()->json([
            'message' => 'Комментарий добавлен',
        ], 201);
    }
}
