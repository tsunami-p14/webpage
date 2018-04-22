<?php

namespace App\Http\Controllers\masters;

use App\m_i_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\i_category;
use App\m_i_category_dtl;

class MicrelmicdtlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = m_i_category::all();
        return view('masters.micrelmicdtl',compact('datas'));
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
        $data = m_i_category::findOrFail($id);
        return view('masters.micrelmicdtlshow',compact('data'));

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
        $micdtl=m_i_category_dtl::pluck('name','id');
        $data = m_i_category::findOrFail($id);
        return view('masters.micrelmicdtledit',compact('data','micdtl'));

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
        $data= m_i_category::findOrFail($id);
        $data->update($request->all());
        $data->m_i_category_dtls()->sync($request->input('mi_categorydtl',[]));

        \Session::flash('flash_message','M Item Categoryと詳細情報のrelationを更新しました');
        return view('masters.micrelmicdtlshow',compact('data'));
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
