<?php

namespace App\Http\Controllers\masters;

use App\I_supply;
use App\M_supply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelisupplymsupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = I_supply::all();
        return view('masters.relisupplymsupply',compact('items'));
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
        $item = I_supply::findOrFail($id);
        return view('masters.relisupplymsupplyshow',compact('item'));
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
        $mfncdtl= M_supply::pluck('name','id');
        $item = I_supply::findOrFail($id);
        return view('masters.relisupplymsupplyedit',compact('item','mfncdtl'));

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
        $item= I_supply::findOrFail($id);
        $item->update($request->all());
        $item->m_supplies()->sync($request->input('ispply_mspply',[]));

        \Session::flash('flash_message','Supply relationを更新しました');
        return view('masters.relisupplymsupplyshow',compact('item'));
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
