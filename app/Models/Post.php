<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //論理削除
    use SoftDeletes;

    //リレーション
    public function taxonomies(){
        return $this->belongsToMany('App\Model\Taxonomy','taxonomy_relationships');
    }
}
