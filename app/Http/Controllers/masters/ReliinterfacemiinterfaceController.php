<?php

namespace App\Http\Controllers\masters;

use App\I_interface;
use App\M_i_interface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ReliinterfacemiinterfaceController extends Controller
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
        return view('masters.reliinterfacemiinterface',compact('datas'));
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
        $data = I_interface::findOrFail($id);
        return view('masters.reliinterfacemiinterfaceshow',compact('data'));
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
        $mfncdtl= M_i_interface::pluck('name','id');
        $data = I_interface::findOrFail($id);
        return view('masters.reliinterfacemiinterfaceedit',compact('data','mfncdtl'));
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
        $data= I_interface::findOrFail($id);
        $data->update($request->all());
        $data->m_i_interfaces()->sync($request->input('mi_interface',[]));

        \Session::flash('flash_message','Item Interfaceと詳細情報のrelationを更新しました');
        return view('masters.reliinterfacemiinterfaceshow',compact('data'));


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
