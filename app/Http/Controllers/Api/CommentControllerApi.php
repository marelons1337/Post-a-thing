<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentControllerApi extends Controller
{
    public function index () {
        return CommentResource::collection(Comment::all());
    }
}
