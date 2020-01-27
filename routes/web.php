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
Route::get('blog_add', 'BlogController@blog_addForm');
// 記事追加（POSTデータを受け取る用）
Route::post('blog_add', 'BlogController@blog_add');

// 記事一覧
Route::get('blog_list', 'BlogController@blog_list');

//記事編集(フォーム表示)
Route::get('blog_edit{id}','BlogController@blog_editForm');
//記事編集(POSTデータを受け取る用)
Route::post('blog_edit','BlogController@blog_edit');

//記事論理削除
Route::get('blog_delete', 'BlogController@blog_delete');

//カテゴリー一覧
Route::get('category_list', 'BlogController@category_list');

//カテゴリー追加(フォーム表示)
Route::get('category_add', 'BlogController@category_addForm');
//カテゴリー追加（POSTデータを受け取る用）
Route::post('category_add', 'BlogController@category_add');

//カテゴリー編集
Route::get('category_edit{id}' ,'BlogController@category_editForm');
//カテゴリー編集(POSTデータを受け取る用)
Route::post('category_edit','BlogController@category_edit');

//*ブログ閲覧機能
//トップページ
Route::get('top', 'ViewController@top');

//記事ページ
Route::get('article_list', 'ViewController@article_list');

//カテゴリー選択時の記事一覧
Route::get('article_category_list','ViewController@article_category_list');



//*認証機能
//初期ユーザー登録

//管理ユーザー登録（初期ユーザー以外の登録）

//ログインユーザーのパスワード変更

//ログイン・ログアウト
Route::get('login', 'Auth\BlogLoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\BlogLoginController@login');
Route::post('logout', 'Auth\BlogLoginController@logout')->name('logout');

