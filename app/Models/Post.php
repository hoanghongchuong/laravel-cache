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
//    	$value = Cache::remember('posts', 60000, function () {
//		    return Post::with('user')->orderBy('id', 'desc')->paginate(10);
//		});
        $value = Post::with('user')->orderBy('id', 'desc')->paginate(10);
		return $value;
    }

    public function user()
    {
        return $this->belongsto('App\User');
    }
    public function search($keyWord) {
        $data = $this->select(['title','content','id'])->where('title', 'LIKE', '%'.$keyWord.'%')->paginate(10);
        $data->appends(['keyword' => $keyWord]);
        return $data;
    }
}
