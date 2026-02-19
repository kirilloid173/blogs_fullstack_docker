@extends('layouts.index')

@section('content')
<div class="articles">
    @forelse ($articles_data as $article)
    <a href="{{ route('specific_article', ['id' => $article -> id]) }}">
        <div class="articles__block">
            <p class="block__title">Заголовок: {{ $article -> title }}</p>
            <p class="block__description">{{ \Illuminate\Support\Str::limit($article -> content, 100) }}</p>
            <p class="block__date">{{ $article -> created_at }}</p>
        </div>
    </a>
    @empty
    <p>К сожалению список пуст</p>
    @endforelse
</div>
@endsection

@section('create-new-article')
<p class="title-create-new-article">Создать новый блог</p>
<form action="{{ route('create_article') }}" method="POST">
    @csrf
    @method('POST')

    <div class="create-new-article">
        <p class="create-new-article__titles">Заголовок</p>
        <input type="text" name="title" id="title" placeholder="Заголовок..." maxlength="50">
        <p class="create-new-article__titles">Текст блога</p>
        <textarea name="content" id="content" rows="10" placeholder="Текст..." maxlength="255"></textarea>
        <button type="submit">Создать</button>
</form>
</div>
@endsection

@vite(['resources/css/articles.css'])