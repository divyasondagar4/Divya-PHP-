<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Services\CommentService;

class CommentController extends Controller
{
    protected $commentService;

    public function __construct( $commentService)
    {
        $this->commentService = $commentService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = $this->commentService->getAllComments();
        return response()->json($comments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        $comment = $this->commentService->createComment($request->all());
        return response()->json($comment, 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return response()->json($comment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $comment = $this->commentService->updateComment($request->all(), $comment);
        return response()->json($comment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $this->commentService->deleteComment($comment);
        return response()->json(['message' => 'Comment deleted successfully'], 204);
    }
}