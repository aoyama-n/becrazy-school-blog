<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Taxonomy;
use App\Models\TaxonomyRelationship;
use Auth;

class BlogController extends Controller {

    //コンストラクタ
    public function __construct() {
    // 認証ミドルウエアを利用する設定
        $this->middleware('auth');
    }

    //記事追加(フォーム表示)
    public function blog_addForm(){
        $user_id = Auth::id();
        return view('blog_addForm', ['user_id' => $user_id]);
    }

    //記事追加(POST登録処理)
    public function blog_add(Request $request) {
        //バリデーション
        $validatedData = $request->validate([
            'title' => 'required|string|max:200',
            'content' => 'required|string'
        ]);
        // レコード登録処理
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->slug = $request->content;
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
        $post = Post::find($id);
        if(is_null($post)) {
            return redirect('blog_add');
        }
        return view('blog_editForm', ['post' => $post]);
    }

    //記事編集(POST登録処理)
    public function blog_edit(Request $request){
        //バリデーション
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
        //バリデーション
        $validatedData = $request->validate([
            'ids' => 'array|required'
        ]);

        $post = Post::find($request->ids);
        foreach ($posts as $post) {
            $post->deleted_at = now();
            $post->save();
        }
        return redirect('blog_list');
    }

    //カテゴリー一覧
    public function category_list(){
        $taxonomies = Taxonomy::all();
        return view('category_list', ['taxonomies' => $taxonomies]);
    }

    //カテゴリー追加(フォーム表示)
    public function category_addForm(){
        return view('category_addForm');
    }

    //カテゴリー追加(POST登録処理)
    public function category_add(Request $request) {
        //バリデーション
        $validatedData = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'description' => 'nullable'
        ]);
        // レコード登録処理
        $taxonomies = new Taxonomy();
        $taxonomy->type = $request->type;
        $taxonomy->name = $request->name;
        $taxonomy->slug = $request->slug;
        $taxonomy->description = $request->description;
        $taxonomy->save();
        return redirect('category_list');
    }

    //カテゴリー編集
    public function category_editForm($id) {
        $taxonomy = Taxonomy::find($id);
        if(is_null($taxonomy)) {
            return redirect('category_add');
        }
        return view('category_editForm', ['taxonomy' => $taxonomy]);
    }

    //カテゴリー物理削除
    public function category_delete(Request $request) {
        // バリデーション
        $validatedData = $request->validate([
            'ids' => 'array|required'
        ]);

        $taxonomies = Taxonomy::find($request->ids);
        foreach ($taxonomies as $taxonomy) {
            $taxonomy->forceDelete();
        }

        return redirect('category_list');
    }

     
}