<?php

namespace App\Http\Controllers\masters;

use App\Http\Requests\MifunctiondtlsRequest;
use App\m_i_function_dtl;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MifunctiondtlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = m_i_function_dtl::all();

        return view('masters.mifunctiondtls',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masters.mifunctiondtlscreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MifunctiondtlsRequest $request)
    {
        //
        m_i_function_dtl::create($request->all());
        \Session::flash('flash_message','M Item function dtls 情報を追加しました');
        return redirect('mifunctiondtls');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_i_function_dtl  $m_i_function_dtl
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = m_i_function_dtl::findOrFail($id);
        return view('masters.mifunctiondtlsshow',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_i_function_dtl  $m_i_function_dtl
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = m_i_function_dtl::findOrFail($id);
        return view('masters.mifunctiondtlsedit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_i_function_dtl  $m_i_function_dtl
     * @return \Illuminate\Http\Response
     */
    public function update(MifunctiondtlsRequest $request, $id)
    {
        //
        $data= m_i_function_dtl::findOrFail($id);
        $data->update($request->all());
        \Session::flash('flash_message','M Item Category 情報を更新しました');
        return view('masters.mifunctiondtlsshow',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_i_function_dtl  $m_i_function_dtl
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = m_i_function_dtl::findOrFail($id);
        $data->delete();
        \Session::flash('flash_message','M Item function 情報を削除しました');

        return redirect('mifunctiondtls');
    }
}
