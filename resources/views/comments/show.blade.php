@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="content">
        <h1>Comment by <a href={{ route('users.show', $comment->user_id) }}>{{ $comment->username }}</a></h1><br />
        <p class="small">{{ $comment->created_at }}, Urgency {{ $comment->urgency }}</p>
        <p>{{ $comment->comment }} </p>
        <a href="/" class="back"><- Go back</a>
        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete Comment</button>
        </form>
    </div>
 </div>
@endsection 
