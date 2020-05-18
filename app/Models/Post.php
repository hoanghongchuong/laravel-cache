<?php

namespace App\Models;
use Cache;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id','title', 'content', 'image',
    ];

    public function getAllPost() {
    	$value = Cache::remember('posts', 60000, function () {
		    return Post::with('user')->orderBy('id', 'desc')->paginate(100);
		});
		return $value;
    }

    public function user()
    {
        return $this->belongsto('App\User');
    }
}
