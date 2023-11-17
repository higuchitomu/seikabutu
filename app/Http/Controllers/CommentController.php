<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index(Comment $comment)
    {
    return view('comments.index')->with(['comments' => $comment->getPaginateByLimit()]);
    }
    
       public function show(Comment $comment)
    {
    return view('comments.show')->with(['comment' => $comment]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('comments.create');    //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Comment $comment, CommentRequest $request)
    {
       $input = $request['comment'];
       $input += ['user_id' => $request->user()->id];
       $comment->fill($input)->save();
       return redirect('/comment'); //
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commnt  $commnt
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commnt  $commnt
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('comments.edit')->with(['comment' => $comment]);//
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commnt  $commnt
     * @return \Illuminate\Http\Response
     */
    public function update(CommentRequest $request, Comment $comment)
    {
       $input_comment = $request['comment'];
       $input += ['user_id' => $request->user()->id];
    $comment->fill($input_comment)->save();

    return redirect('/comment/' . $comment->id); //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commnt  $commnt
     * @return \Illuminate\Http\Response
     */
    public function delete(Comment $comment)
    {
        $comment->delete();
        return redirect('/comment/');
        //
    }
}
