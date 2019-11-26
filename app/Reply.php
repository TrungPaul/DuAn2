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
}
