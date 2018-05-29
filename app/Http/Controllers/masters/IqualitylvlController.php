<?php

namespace App\Http\Controllers\masters;

use App\I_quality_lvl;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IqualitylvlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = I_quality_lvl::all();
        return view('masters.iqualitylvls',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masters.iqualitylvlcreate');
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
        $response=I_quality_lvl::create($request->all());

        \Session::flash('flash_message','Quality Level Group 情報を追加しました');
        return redirect('iqualitylvls');
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
        return view('masters.iqualitylvlshow',compact('item'));

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
        $item = I_quality_lvl::findOrFail($id);
        return view('masters.iqualitylvledit',compact('item'));
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
        \Session::flash('flash_message','Quality Group 情報を更新しました');
        return view('masters.iqualitylvlshow',compact('item'));
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
        $item = I_quality_lvl::findOrFail($id);
        $item->delete();
        \Session::flash('flash_message','Quality Group 情報を削除しました');

        return redirect('iqualitylvls');
    }
}
