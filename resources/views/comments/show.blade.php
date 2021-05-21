@extends('layouts.app')

@section('content')
<div class="show-container">
    <div class="show-content">
        <h1 class="show-header">Post by <a href={{ route('users.show', $comment->user_id) }}>{{ $comment->username }}</a></h1><br />
        <p>{{ $comment->created_at }}, Urgency {{ $comment->urgency }}</p>
        <p>{{ $comment->comment }} </p>
        <a href="/" class="back"><- Go back</a>
        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="delete-comment-button">Delete Comment</button>
        </form>
    </div>
 </div>
@endsection 
