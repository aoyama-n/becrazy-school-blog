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
        $validatedData = $request->validate([
            'title' => 'request|string|max:200',
            'content' => 'required|string'
        ]);
        // レコード登録処理
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return view('result');
        
    }

    //記事一覧
    public function blog_list() {
        $posts = POST::all();
        return view('blog_list',['posts' => $posts]);
    }

    //記事編集(フォーム表示)
    public function blog_editForm($id) {
        $posts = Post::find($id);
        if(is_null($post)) {
            return redirect('blog_add');
        }
        return view('blog_editForm', ['post' => $post]);
    }

    //記事編集(POST登録処理)
    public function blog_edit(Request $request){
        $request->validate([
            'id' => 'required',
            'title' => 'required|string',
            'content' => 'required|string'
        ]);

        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect('blog_list');
    }

    //記事論理削除
    public function blog_delete(Request $request){
        $validatedData = $request->validate([
            'ids' => 'array|required'
        ]);

        Post::destroy($request->ids);
        return redirect('blog_list');
    }

    //カテゴリー一覧

    //カテゴリー追加(フォーム表示)

    //カテゴリー追加(POST登録処理)

    //カテゴリー編集

    //カテゴリー物理削除

     
}