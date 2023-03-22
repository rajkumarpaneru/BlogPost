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

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function index()
    {
        return response()->json(Post::all(), 200);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json('Deleted', 204);
    }

}
