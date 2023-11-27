<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;
use App\Http\Requests\ReplyRequest;
use App\Models\Comment;

class ReplyController extends Controller
{
    public function create(Comment $comment)
    {
    return view('replys.create')->with(['comment' => $comment]);
    }
    
    public function store(Reply $reply, ReplyRequest $request)
    {
        $savedata = $request['comment'];
        $savedata += [
            'user_id'=> \Auth::id(),
        ];
        $reply->fill($savedata)->save();
        
        return redirect()->route('show',[$savedata['comment_id']]);
    }
}

        
        