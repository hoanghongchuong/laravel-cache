<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends BaseController
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->getAllPost();
        $data = $this->responseApi(true,'success', $posts, Response::HTTP_OK);
        return $data;
    }

    public function getPostById($id) {
        $data = $this->post->findOrFail($id);
        return $this->responseApi(true,'success', $data, Response::HTTP_OK);
    }

    public function createPost(Request $request) {
        $input = $request->all();
        $path = 'post';
        if($request->hasFile('image')) {
            $file = $this->uploadImage($request->file('image'), $path);
            $input['image'] = $file;
        }
        dd($input);
        $data = $this->post->create($input);
        return $this->responseApi(true,'success', $data, Response::HTTP_OK);
    }

    public function update(Request $request, $id) {
        $post = $this->post->findOrFail($id);
        $input = $request->all();
        $path = 'post';
        if($request->hasFile('image')) {
            $file = $this->uploadImage($request->file('image'), $path);
            $input['image'] = $file;
        }
        $data = $post->update($input);
        return $this->responseApi(true,'success', $data, Response::HTTP_OK);
    }
    public function delete($id) {
        $data = $this->post->findOrFail($id);
        $data->delete();
        return $this->responseApi(true,'success',[], Response::HTTP_NO_CONTENT);
    }
}
