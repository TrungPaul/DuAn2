<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
		'user_id',
		'avatar',
		'name',
		'post_id',
		'content',
		'created_at',
    ];
    public function post()
	{
    	return $this->belongsTo('App\Post');
	}

	public function user()
	{
    	return $this->belongsTo('App\User');
	}

	public function replies()
	{
    	return $this->hasMany('App\Reply');
    }
	
}
