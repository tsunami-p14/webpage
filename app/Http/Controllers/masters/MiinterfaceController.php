<?php

namespace App\Http\Controllers\masters;

use App\Http\Requests\MiinterfaceRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\M_i_interface;

class MiinterfaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = M_i_interface::all();
        return view('masters.miinterfaces',compact('datas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masters.miinterfacecreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MiinterfaceRequest $request)
    {
        //
        $response=M_i_interface::create($request->all());

        \Session::flash('flash_message','Master item Interface 情報を追加しました');
        return redirect('miinterface');

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
        $data = M_i_interface::findOrFail($id);
        return view('masters.miinterfaceshow',compact('data'));
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
        $data = M_i_interface::findOrFail($id);
        return view('masters.miinterfaceedit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MiinterfaceRequest $request, $id)
    {
        //
        $data= M_i_interface::findOrFail($id);
        $data->update($request->all());
        \Session::flash('flash_message','Master Item Interface情報を更新しました');
        return view('masters.miinterfaceshow',compact('data'));
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
        $data = M_i_interface::findOrFail($id);
        $data->delete();
        \Session::flash('flash_message','Master Interface情報を削除しました');

        return redirect('miinterface');
    }
}
