<?php

namespace App\Http\Controllers\masters;

use App\M_shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = M_shop::all();
        return view('masters.mshops',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masters.mshopcreate');
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
        $item=M_shop::create($request->all());
        \Session::flash('flash_message','Shop Master 情報を追加しました');
        return redirect('mshops');
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
        $item = M_shop::findOrFail($id);
        return view('masters.mshopshow')->with('item',$item);

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
        $item = M_shop::findOrFail($id);
//        return view('masters.msupplyedit',compact('item'));
        return view('masters.mshopedit')->with('item',$item);
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
        $item= M_shop::findOrFail($id);
        $item->update($request->all());

        \Session::flash('flash_message','M ITEM を更新しました');
        return view('masters.mshopshow')->with('item',$item);
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
        $item = M_shop::findOrFail($id);
        $item->delete();
        \Session::flash('flash_message','Shop Master 情報を削除しました');

        return redirect('mshops');
    }
}
