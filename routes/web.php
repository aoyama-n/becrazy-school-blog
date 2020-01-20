<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//*ブログ投稿機能（管理者ページ）
// 記事追加(フォーム表示)

// 記事一覧

//記事編集

//記事論理削除

//カテゴリー一覧

//カテゴリー追加

//カテゴリー編集


//*ブログ閲覧機能
//トップページ

//記事ページ

//カテゴリー選択時の記事一覧


//*認証機能
//初期ユーザー登録

//管理ユーザー登録（初期ユーザー以外の登録）

//ログインユーザーのパスワード変更

//ログイン・ログアウト

