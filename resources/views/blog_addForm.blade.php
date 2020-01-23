<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="utf-8">
    <title>記事追加</title>

</head>

<body>
    <div class="flex-center position-ref">
        <h1>ブログ記事追加フォーム</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST">
            @csrf
            <dl>
                <dt>タイトル</dt>
                <dd><input type="text" name="title" required value="{{ old('title') }}"></dd>
            </dl>
            <dl>
                <dt>本文</dt>
                <dd><textarea name="content" required>{{ old('content') }}</textarea></dd>
            </dl>
            <input type="submit" value="投稿">
        </form>
        <a href="blog_list">リストへ戻る</a>
    </div>
</body>

</html>