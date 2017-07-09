<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Laravel!';
        return view('pages.index')->with('title', $title);
    }

        public function create($id)
    {

        $post_id = $id;
        return view("comments.create")->with('id', $post_id);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
            ]);
        $user_id = auth()->user()->id;
        $comment = new Comment;
        $comment->body = $request->input('body');
        $comment->user_id = $user_id;
        $comment->comment_id = Post::find($id);
        $comment->save();
        return redirect('/posts')->with('success', 'Comment added.');
    }

}
