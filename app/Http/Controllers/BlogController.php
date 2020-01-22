<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller {

    //コンストラクタ
    public function __construct() {
    // 認証ミドルウエアを利用する設定
        $this->middleware('auth');
    }

    //記事追加(フォーム表示)
    public function blog_addForm(){
        return view('blog_addForm');
    }

    //記事追加(POST登録処理)
    public function blog_add(Request $request) {
        //バリデーション
        
        // レコード登録処理
        
    }

    //記事一覧

    //記事編集(フォーム表示)

    //記事編集(POST登録処理)

    //記事論理削除

    //カテゴリー一覧

    //カテゴリー追加(フォーム表示)

    //カテゴリー追加(POST登録処理)

    //カテゴリー編集

    //カテゴリー物理削除

     
}