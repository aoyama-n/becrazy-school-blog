<!doctype html>
<html lang="jp">

<head>
    <meta charset="utf-8">
    <title>記事編集</title>

</head>

<body>
    <div class="flex-center position-ref">
        <h1>ブログ記事編集フォーム</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="blog_edit">
            @csrf
            <input type="hidden" name="id" value="{{ $todo_list->id }}">
            <dl>
                <dt>タイトル</dt>
                <dd><input type="text" name="title" required value="{{ $post->title }}"></dd>
            </dl>
            <dl>
                <dt>本文</dt>
                <dd><textarea name="memo" required>{{ $post->content }}</textarea></dd>
            </dl>
            <input type="submit" value="更新">
        </form>
    </div>
</body>
</html>