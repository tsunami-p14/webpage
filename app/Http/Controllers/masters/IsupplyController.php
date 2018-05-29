<?php

namespace App\Http\Controllers\masters;

use App\I_supply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IsupplyController extends Controller
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
        return view('masters.isupplies',compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masters.isupplycreate');
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
        I_supply::create($request->all());

        \Session::flash('flash_message','Supply情報を追加しました');
        return redirect('isupplies');
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
        return view('masters.isupplyshow',compact('item'));

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
        $item = I_supply::findOrFail($id);
        return view('masters.isupplyedit',compact('item'));
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
        \Session::flash('flash_message','Supply 情報を更新しました');
        return view('masters.isupplyshow',compact('item'));
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
        $item = I_supply::findOrFail($id);
        $item->delete();
        \Session::flash('flash_message','Supply情報を削除しました');

        return redirect('isupplies');
    }
}
