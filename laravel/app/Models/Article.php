<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Article extends Model
{
    const UPDATED_AT = null;

    use HasFactory;

    protected $appends = ['short_content'];
    protected $fillable = ['title', 'content'];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function getShortContentAttribute()
    {
        return Str::limit($this->content, 100);
    }
}
