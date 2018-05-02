<?php

namespace App\Http\Controllers\masters;

use App\Http\Requests\IfunctionRequest;
use App\I_interface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IinterfaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = I_interface::all();
        return view('masters.iinterfaces',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masters.iinterfacecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IfunctionRequest $request)
    {
        //
        $response=I_interface::create($request->all());

        \Session::flash('flash_message','item Interface 情報を追加しました');
        return redirect('iinterface');
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
        $data = I_interface::findOrFail($id);
        return view('masters.iinterfaceshow',compact('data'));
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
        $data = I_interface::findOrFail($id);
        return view('masters.iinterfaceedit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IfunctionRequest $request, $id)
    {
        //
        $data= I_interface::findOrFail($id);
        $data->update($request->all());
        \Session::flash('flash_message','Interface情報を更新しました');
        return view('masters.iinterfaceshow',compact('data'));

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
        $data = I_interface::findOrFail($id);
        $data->delete();
        \Session::flash('flash_message','Interface情報を削除しました');

        return redirect('iinterface');
    }
}
