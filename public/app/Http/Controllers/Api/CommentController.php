<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Создание комментария к статье
     *
     * @param StoreCommentRequest $request
     *
     * @return CommentResource
     */
    public function store(StoreCommentRequest $request)
    {
        $validated = $request->validated();

        $comment = Comment::query()->create($validated);

        return new CommentResource($comment); // response()->json($comment, 200)
    }

}
