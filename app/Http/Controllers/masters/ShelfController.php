<?php

namespace App\Http\Controllers\masters;

use App\Http\Requests\ShelfRequest;
use App\Shelf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShelfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Shelf::all();
        return view('masters.shelves',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masters.shelfcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShelfRequest $request)
    {
        //
        $response= Shelf::create($request->all());

        \Session::flash('flash_message','Shelf 情報を追加しました');
        return redirect('shelves');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item = Shelf::findOrFail($id);
        return view('masters.shelfshow',compact('item'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = Shelf::findOrFail($id);
        return view('masters.shelfedit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShelfRequest $request, $id)
    {
        //
        $item= Shelf::findOrFail($id);
        $item->update($request->all());
        \Session::flash('flash_message','Shefl情報を更新しました');
        return view('masters.shelfshow',compact('item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = Shelf::findOrFail($id);
        $item->delete();
        \Session::flash('flash_message','Shefl情報を削除しました');

        return redirect('shelves');
    }
}
