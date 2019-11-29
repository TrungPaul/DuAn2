<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies';
    protected $fillable = [
		'user_id',
		'avatar',
		'name',
		'comment_id',
		'content',
		'created_at',
	];
	
	public function user()
    {
        return $this->belongsTo('App\User' , 'user_id' , 'id');
    }
}
