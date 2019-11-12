<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'user_id',
        'cate_id',
        'title',
        'image',
        'content',
        'status',
        'created_at',
    ];
    public function category()
	{
    	return $this->belongsTo('App\Category', 'cate_id', 'id');
	}
}
