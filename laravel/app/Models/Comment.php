<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    const UPDATED_AT = null;

    protected $fillable = ['author_name', 'content', 'article_id'];

    use HasFactory;

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
