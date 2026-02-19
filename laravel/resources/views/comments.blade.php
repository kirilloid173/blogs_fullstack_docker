<p class="title-block-comments">Блок комментариев</p>
<div class="comments">
    @forelse ($comments_data as $comment)
    <div class="comments__comment">
        <p>{{ $comment -> content }}</p>
        <p>Автор: {{ $comment -> author_name }}</p>
        <p>Дата: {{ $comment -> created_at }}</p>
    </div>
    @empty
    <p>Комментарии к данному посту отсутствуют</p>
    @endforelse
    <p class="title-add-comment">Добавить комментарий</p>
    <div class="article-create-comment">
        <form action="{{ route('create_article_comment', ['id' => $id]) }}" method="POST">
            @csrf
            @method('POST')
            <p class="article-create-comment__titles">Как вас зовут?</p>
            <input type="text" name="author_name" id="author_name" placeholder="Меня зовут..." maxlength="36">
            <p class="article-create-comment__titles">Ваш комментарий</p>
            <textarea name="content" id="content" rows="10" placeholder="Текст..."></textarea>
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>
@endsection