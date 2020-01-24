<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="utf-8">
    <title>カテゴリー追加</title>

</head>

<body>
    <div class="flex-center position-ref">
        <h1>ブログカテゴリー追加フォーム</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="category_add">
            @csrf
            <dl>
                <dt>タイプ</dt>
                <dd><input type="radio" name="type" required value="category">カテゴリー</dd>
            </dl>
            <dl>
                <dt>名前</dt>
                <dd><input type="text" name="name" required value="{{ old('name') }}"></dd>
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" required value="{{ old('slug') }}"></dd>
            </dl>
            <dl>
                <dt>説明文</dt>
                <dd><textarea name="description" required>{{ old('description') }}</textarea></dd>
            </dl>
            <input type="submit" value="投稿">
        </form>
        <a href="category_list">リストへ戻る</a>
    </div>
</body>

</html>