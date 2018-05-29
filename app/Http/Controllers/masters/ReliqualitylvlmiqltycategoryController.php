<?php

namespace App\Http\Controllers\masters;

use App\I_quality_lvl;
use App\M_i_qlty_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReliqualitylvlmiqltycategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = I_quality_lvl::all();
//        return view('masters.relisupplymsupply',compact('items'));
        return view('masters.reliqualitylvlmiqltycategories')->with('items',$items);
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
        $item = I_quality_lvl::findOrFail($id);
//        return view('masters.reliinterfacemiinterfaceshow',compact('data'));
        return view('masters.reliqualitylvlmiqltycategoryshow')
            ->with('item',$item);
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
        $mfncdtl= M_i_qlty_category::pluck('name','id');
        $item = I_quality_lvl::findOrFail($id);
        return view('masters.reliqualitylvlmiqltycategoryedit')
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
        $item= I_quality_lvl::findOrFail($id);
        $item->update($request->all());
        $item->m_i_qlty_categories()->sync($request->input('iqua_mqua',[]));

        \Session::flash('flash_message','Supply relationを更新しました');
        return view('masters.reliqualitylvlmiqltycategoryshow')
            ->with('item',$item);
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
