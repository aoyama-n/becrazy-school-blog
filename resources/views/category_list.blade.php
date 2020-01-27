<!doctype html>
<html lang="jp">

<head>
    <meta charset="utf-8">
    <title>カテゴリーリスト</title>

</head>
<body>
    <div class="flex-center position-ref">
        <h1>ブログカテゴリーリスト</h1>

        <form method="POST" action="category_delete">
            <a href="category_add">カテゴリー追加</a>
            @csrf
            <table border="1" cellspacing="0" cellpadding="5" align="left">
                <thead>
                    <tr>
                        <th>選択</th><th>id</th><th>名前</th><th>タイプ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($taxonomies as $taxonomy)
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="{{ $taxonomy->id }}"></td>
                            <td>{{ $taxonomy->id }}</td>
                            <td>{{ $taxonomy->name }}</td>
                            <td>{{ $taxonomy->type }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <input type="submit" value="削除">
        </form>
    </div>
</body>
</html>