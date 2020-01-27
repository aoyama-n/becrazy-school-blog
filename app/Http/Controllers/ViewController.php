<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Taxonomy;
use App\Models\TaxonomyRelationship;

class ViewController extends Controller {

    //トップページ表示
    public function top(){
        return view ('top');
    }

    //記事ページ
    public function blog_list(){
        $article_lists = Post::all();
        return view('blog_list', ['article_lists' => $article_lists]);
    }

    //カテゴリー選択時の記事一覧
    public function article_category_list(){
        $article_category_lists = Taxonomy::all();
        return view('article_category_list', ['article_category_lists' => $article_category_lists]);
    }

    //カテゴリー選択後
    public function article_category($id){
        $article_categories = Taxonomy::find($id);
        return view('article_category', ['article_categories' => $article_category]);
    }
}