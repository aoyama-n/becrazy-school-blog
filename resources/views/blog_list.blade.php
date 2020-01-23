<!doctype html>
<html lang="jp">

<head>
    <meta charset="utf-8">
    <title>記事リスト</title>

</head>
<body>
    <div class="flex-center position-ref">
        <h1>ブログ記事リスト</h1>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <input type="submit" value="ログアウト">
        </form>

        <form method="POST" action="blog_delete">
            <a href="blog_add">記事追加</a>
            @csrf
            <table border="1" cellspacing="0" cellpadding="5" align="left">
                <thead>
                    <tr>
                        <th>選択</th><th>id</th><th>タイトル</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="{{ $post->id }}"></td>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <input type="submit" value="選択した記事を削除">
        </form>
    </div>
</body>
</html>