<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        Post::create($request->all());
        return response()->json('Post Created successfully.', 201);
    }

    public function show(Post $post)
    {
        return response()->json($post, 200);
    }
}
