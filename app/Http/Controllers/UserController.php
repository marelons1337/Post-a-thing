<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index() {
    
        $comments = Comment::orderByDesc('created_at')->limit(3)->get();

        return view('comments/index', ['comments' => $comments]);
    }

    public function show($id) {

        $user = User::findOrFail($id);
        return view('comments/show', ['user' => $user]);
    }

    public function store() {


        $comment = new Comment();
         
        $comment->username = "test";
        $comment->comment = request('comment');
        $comment->urgency = request('urgency');
        $comment->contact_methods = request('contact');

        $validated = request()->validate([
            'comment' => 'required|max:255',
            'urgency' => 'required',
            'contact' => 'required'
        ]);

        $comment->save();

        return redirect('/')->with('mssg', 'Your thing has been posted!');
    }

    public function destroy($id) {
        $user = User::findOrFail($id); 
        $user->delete();

        return redirect('/');
    }
}
