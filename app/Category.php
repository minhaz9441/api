<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function childrens(){
        return $this->belongsToMany(Category::class, 'category_parent', 'category_id', 'parent_id');
    }
}
