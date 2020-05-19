<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function responseApi($status, $message, $data, $statusCode) {
        $response = [
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];
        return response()->json($response, $statusCode);
    }

    public function uploadImage($image, $path) {
        if(!is_null($image)) {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/'.$path), $imageName);
            return $imageName;
        }
    }
}
