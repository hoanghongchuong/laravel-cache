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
//    	$value = Cache::remember('posts', 6000, function () {
//		    return Post::with('user')->orderBy('id', 'desc')->paginate(10);
//		});
        $value = Post::with('user')->orderBy('id', 'desc')->paginate(10);
		return $value;
    }

    public function user()
    {
        return $this->belongsto('App\User');
    }
}
