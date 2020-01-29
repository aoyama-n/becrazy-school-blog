<!DOCTYPE html>
<html lang="jp">

<head>

    <meta charset="utf-8">
    <title>トップページ</title>

</head>

<body>
	<div class="flex-center position-ref full-height">
		<h1>トップページ</h1>

	    @if (Route::has('login'))
	        <div class="top-right links">
			    @auth
			        <a href="{{ route('login') }}">ログイン</a>
			    @else
			         @if (Route::has('register'))
			             <a href="{{ route('register') }}">ユーザー登録</a>
			         @endif
			    @endauth
			</div>
		@endif

		<hr>
	    <a href ="blog_list">記事一覧へ</a>
	    <br>
        <a href ="article_category_list">カテゴリー一覧へ</a>
        <hr>

         <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
         <input type="submit" value="ログアウト">
         </form>

    </div>
</body>

</html>