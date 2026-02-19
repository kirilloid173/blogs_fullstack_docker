@extends ('layouts.specific_article')

@section('content')
<div class="article">
    <p class="article__title">{{ $article_data -> title }}</p>
    <p class="article__description">{{ $article_data -> content }}</p>
    <p class="article__date">Дата: {{ $article_data -> created_at }}</p>
</div>

@include ('comments', ['comments_data' => $comments_data, 'id' => $article_data -> id])