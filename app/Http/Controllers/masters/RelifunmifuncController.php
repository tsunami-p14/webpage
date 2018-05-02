<?php

namespace App\Http\Controllers\masters;

use App\I_function;
use App\M_i_function_dtl;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelifunmifuncController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = I_function::all();
        return view('masters.ifunrelmifunc',compact('datas'));
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
        $data = I_function::findOrFail($id);
        return view('masters.ifunrelmifuncshow',compact('data'));
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
        $mfncdtl= M_i_function_dtl::pluck('name','id');
        $data = I_function::findOrFail($id);
        return view('masters.ifunrelmifuncedit',compact('data','mfncdtl'));
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
        $data= I_function::findOrFail($id);
        $data->update($request->all());
        $data->m_i_function_dtls()->sync($request->input('mi_functiondtl',[]));

        \Session::flash('flash_message','M Item Functionと詳細情報のrelationを更新しました');
        return view('masters.ifunrelmifuncshow',compact('data'));

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
