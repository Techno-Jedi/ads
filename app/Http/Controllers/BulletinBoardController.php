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
        // $ads = Bulletin_board::where('salesman', Auth::id())->get();
        return view("index", [
        "boards" => Bulletin_board::all(),
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view("create", ["user_id" => Auth::id()]);
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
    public function show(Bulletin_board $board)
    {
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
    public function update(StoreBoardRequest $request, Bulletin_board $board)
    {
        $data = $request->all();
        $board->update($data);
        return redirect("/board");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bulletin_board  $bulletin_board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bulletin_board $board)
    {
        $board->delete();
        return redirect("/board");
    }
}