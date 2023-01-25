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
        // dd($request->post());
        return redirect("/board/create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bulletin_board  $bulletin_board
     * @return \Illuminate\Http\Response
     */
    public function show(Bulletin_board $board)
    {
        //  $z = Bulletin_board::get()->keyBy($bulletin_board);
        // $z = Bulletin_board::find("id");
        // return $z;

        // return view("show", ["bulletin_board" =>$z]);
        // $posts = $bulletin_board->all();
        // foreach($posts as $post) {
        //     dump($post);
            
        // };
       
        // foreach ( $board->toArray() as $posts){
        //     dd($posts);
        // } 
        $ads = $board->toArray();
        return view("show", ["board" => Bulletin_board::find($ads) ]);

    }
    /**`
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bulletin_board  $bulletin_board
     * @return \Illuminate\Http\Response
     */
    public function edit(Bulletin_board $board)
    {
     
        // foreach ($board as $post){
        //     $post;
        // } 
    
        // $board = Bulletin_board::find($bulletin_board);
        $ads = $board->toArray();
         return view("edit",["boards" => Bulletin_board::find($ads)]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bulletin_board  $bulletin_board
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
                 
         dd("dsjfhsdn");
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