<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index() {
    
        $comments = Comment::orderByDesc('created_at')->limit(20)->get();

        return view('comments/index', ['comments' => $comments]);
    }

    public function store() {
        
        $comment = new Comment();
         
        $comment->username = Auth::user()->name;
        $comment->user_id = Auth::user()->id;
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

    public function show($id) {
        $comment = Comment::findOrFail($id);
        return view('comments/show', ['comment' => $comment]);
    }

    public function destroy($id) {
        $comment = Comment::findOrFail($id); 
        $comment->delete();

        return redirect('/');
    }
}
