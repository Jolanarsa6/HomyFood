<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
     public function store(Request $request)
    {
        $comment = $request->validate([
            'buyer_name' => ['required','string'],
            'buyer_comment' => ['required','string'],
            'comment_date' => ['required', 'date'],
            'product_id' => ['required']
        ]);

        Comment::create($comment);
        return redirect()->back()->with('comment_success', __("messages.comment_success_msg"));
    }
}
