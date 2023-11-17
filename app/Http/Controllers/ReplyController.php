<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class ReplyController extends Controller
{
    public function store(ReplyRequest $request)
    {
        $savedate = [
            'title' => $request->title,
            'content'=> $request->content,
            'user_id'=> $request->user_id,
        ];
        
        $reply = new content;
        $reply->fill($savedate)->save();
        
        return redirect()->route('comments/show',[$savedata['user_id']])->with('commentstatus','コメントを投稿しました');
    }
}

        
        