<?php

namespace App\Http\Controllers\masters;

use App\Location;
use App\Shelf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RellocationshelfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items=Shelf::all();
        return view('masters.rellocationshelves')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item = Shelf::findOrFail($id);
        return view('masters.rellocationshelfshow')->with('item',$item);

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
        $mfncdtl= Location::pluck('name','id');
        $item = Shelf::findOrFail($id);
        return view('masters.rellocationshelfedit')
            ->with('item',$item)
            ->with('mfncdtl',$mfncdtl);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $item= Shelf::findOrFail($id);
        $item->update($request->all());
        $item->locations()->sync($request->input('location_shelf',[]));

        \Session::flash('flash_message','Shelf-Location のrelationを更新しました');
        return view('masters.rellocationshelfshow',compact('item'));
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
    }
}
