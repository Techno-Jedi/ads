<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBoardRequest;
use App\Models\Bulletin_board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BulletinBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view("index", [
        "boards" => Bulletin_board::all(),
        "saleman" => Auth::id(),
      ]);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoardRequest $request)
    {
        Bulletin_board::create($request->all());     
        return redirect("/board/create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bulletin_board  $bulletin_board
     * @return \Illuminate\Http\Response
     */
    public function show(Bulletin_board $bulletin_board)
    {
        return view("show", ["bulletin_board" => $bulletin_board->find(16)]);
        // $posts = $bulletin_board->all();
        // foreach($posts as $post) {
        //     dump($post->id);
            
        // };
       
        // foreach ( $bulletin_board->all() as $user){
        //     echo $user->getAttributes()['id'];
        // } 
        // return view("board", ["bulletin_board" =>  $user]);

    }
    /**`
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bulletin_board  $bulletin_board
     * @return \Illuminate\Http\Response
     */
    public function edit(Bulletin_board $bulletin_board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bulletin_board  $bulletin_board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bulletin_board $bulletin_board)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bulletin_board  $bulletin_board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bulletin_board $bulletin_board)
    {
        //
    }
}