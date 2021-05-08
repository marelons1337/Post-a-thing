@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    <div class="content">
        <h1>Post a new thing</h1> 
        <form action="/" method="POST">
            @csrf
            <label for="comment">Your thing:</label>
            <input type="text" name="comment" id="comment">
            <br>
            <label for="urgency">How urgent is it?</label>
            <select name="urgency" id="urgency">
                <option value="high">High</option>
                <option value="medium">Medium</option>
                <option value="low">Low</option>
            </select><br>
            How do you want to be contacted?
            <fieldset>
                <input type="checkbox" name="contact[]" value="email">Email
                <input type="checkbox" name="contact[]" value="phone">Phone
            </fieldset>
            <input type="submit" value="Post  It">
        </form>
    </div>
 </div>
@endsection 
