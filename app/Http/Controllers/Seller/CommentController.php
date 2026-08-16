<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
       public function showComments()
    {
     $comments = Comment::whereHas('product', function ($query) {
                $query->where('user_id', auth()->id()); 
            })
            ->with(['user', 'product', 'replies.user']) 
            ->latest()
            ->get();

    return view("seller.messages",compact('comments'));
    }

    public function storeReply(Request $request, Comment $comment)
    {
        if ($comment->product->user_id !== auth()->id()) {
            abort(403, 'غير مصرح لك بالرد على هذا التعليق');
        }

        $request->validate([
            'body' => 'required|string|max:1000',
        ]);

        $comment->replies()->create([
            'user_id' => auth()->id(), // البائع
            'body' => $request->body,
        ]);

        return redirect()->back()->with('success', 'تم إرسال الرد بنجاح');
    }
}
