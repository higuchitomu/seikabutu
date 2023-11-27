<?php

namespace App\Http\Controllers;

use App\Models\Participation;
use Illuminate\Http\Request;
use App\Http\Requests\ParticipationRequest;
use App\Models\Event;

class ParticipationController extends Controller
{
    public function create(Event $event)
    {
    return view('participants.create')->with(['event' => $event]);
    }
    
    public function store(Participation $participation, Request $request)
    {
        $savedata = $request['event'];
        $savedata += [
            'user_id'=> \Auth::id(),
        ];
        $reply->fill($savedata)->save();
        
        return redirect()->route('show',[$savedata['event_id']]);
    }
}
