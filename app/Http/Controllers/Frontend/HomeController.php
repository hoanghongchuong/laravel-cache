<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Post;
use App\User;
use Cache;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    public function index(Request $request)
    {
        // $posts = new Post();
        $result = $this->post->getAllPost();

        return view('frontend.home', compact('result'));
    }

    public function show($id) {
        $post = $this->post->findOrFail($id);
        $this->authorize('view-post');
        return view('frontend.post.detail', compact('post'));
    }

    public function search(Request $request)
    {
        $result = $this->post->search($request->keyword);
        return view('frontend.search', compact('result'));
    }
}
