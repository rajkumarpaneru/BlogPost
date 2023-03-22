<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        Post::create($request->all());
        return response()->json('Post Created successfully.', 201);
    }

    public function show(Post $post): JsonResponse
    {
        return response()->json($post, 200);
    }

    public function update(Request $request, Post $post): JsonResponse
    {
        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function index(): JsonResponse
    {
        return response()->json(Post::all(), 200);
    }

    public function destroy(Post $post): JsonResponse
    {
        $post->delete();
        return response()->json('Deleted', 204);
    }

}
