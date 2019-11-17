<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
    ];
    public function posts()
    {
        return $this->hasMany('App\Post', 'cate_id' , 'id');
    }
}
