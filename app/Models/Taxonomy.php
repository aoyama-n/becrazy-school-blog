<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taxonomy extends Model
{
    //テーブル名の指定
    protected $table = 'taxonomy';

    //論理削除
    use SoftDeletes;

    //リレーション
    public function posts(){
        return $this->belongsToMany('App\Model\Post','taxonomy_relationships');
    }

}
