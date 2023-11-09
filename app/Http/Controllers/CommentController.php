<?php

namespace App\Http\Controllers;

use App\Models\Commnt;
use Illuminate\Http\Request;

class CommntController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index(Comment $comment)
    {
    return view('comments.index')->with(['comments' => $comment->getByLimit()]);
    }
    
       public function show(Comment $comment)
    {
    return view('comments.show')->with(['comments' => $comment]);
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
    public function store(Request $request)
    {
        //
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
    public function edit(Commnt $commnt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commnt  $commnt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commnt $commnt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commnt  $commnt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commnt $commnt)
    {
        //
    }
}
