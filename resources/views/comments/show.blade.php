@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="content">
        <h1>Details of user {{ $user->name }}</h1><br />
        <p>Email: {{ $user->email }}</p>
        <p>Joined: {{ $user->created_at }} </p>
        <a href="/" class="back"><- Go back</a>
        <form action="{{ route('comments.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete user</button>
        </form>
    </div>
 </div>
@endsection 
