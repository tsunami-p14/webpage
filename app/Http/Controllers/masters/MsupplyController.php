<?php

namespace App\Http\Controllers\masters;

use App\M_supply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MsupplyRequest;

class MsupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = M_supply::all();
        return view('masters.msupplies',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masters.msupplycreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MsupplyRequest $request)
    {
        //
        $response=M_supply::create($request->all());

        \Session::flash('flash_message','Supply Master 情報を追加しました');
        return redirect('msupplies');

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
        $item = M_supply::findOrFail($id);
        return view('masters.msupplyshow',compact('item'));
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
        $item = M_supply::findOrFail($id);
        return view('masters.msupplyedit',compact('item'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MsupplyRequest $request, $id)
    {
        //
        $item= M_supply::findOrFail($id);
        $item->update($request->all());
        \Session::flash('flash_message','Supply Master情報を更新しました');
        return view('masters.msupplyshow',compact('item'));
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
        $item = M_supply::findOrFail($id);
        $item->delete();
        \Session::flash('flash_message','Supply Master 情報を削除しました');

        return redirect('msupplies');
    }
}
