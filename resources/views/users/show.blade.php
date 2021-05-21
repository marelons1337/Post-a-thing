@extends('layouts.app')

@section('content')
<div class="user-container">
    <div class="user-content">
        <h1>Details of user {{ $user->name }} </h1><br />
        <p>ID: {{ $user->id }}</p> 
        <p>Email: {{ $user->email }}</p>
        <p>Phone: {{ $user->phone }}</p>
        <p>Joined: {{ $user->created_at }} </p>
        <a class="btn" href="/"><- Go back</a>
    </div>
 </div>
@endsection 
