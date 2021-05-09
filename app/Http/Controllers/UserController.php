<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    
    public function show($id) {
        $user = User::findOrFail($id);
        return view('users/show', ['user' => $user]);
    }

    public function destroy($id) {
        $user = User::findOrFail($id); 
        $user->delete();

        return redirect('/');
    }
}
