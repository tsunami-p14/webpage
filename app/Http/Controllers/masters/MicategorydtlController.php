<?php

namespace App\Http\Controllers\masters;

use App\Http\Requests\MicategorydtlRequest;
use App\M_i_category_dtl;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MicategorydtlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = M_i_category_dtl::all();
        return view('masters.micategorydtls',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
        return view('masters.micategorydtlcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MicategorydtlRequest $request)
    {
        //
        M_i_category_dtl::create($request->all());
        \Session::flash('flash_message','M Item Category DTL 情報を追加しました');
        return redirect('micategorydtls');
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
        $data = M_i_category_dtl::findOrFail($id);
        return view('masters.micategorydtlshow',compact('data'));
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
        $data = M_i_category_dtl::findOrFail($id);
        return view('masters.micategorydtledit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MicategorydtlRequest $request, $id)
    {
        //
        $data= M_i_category_dtl::findOrFail($id);
        $data->update($request->all());
        \Session::flash('flash_message','M Item Category DTL 情報を更新しました');
        return view('masters.micategorydtlshow',compact('data'));
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
        $data = M_i_category_dtl::findOrFail($id);
        $data->delete();
        \Session::flash('flash_message','M Item Category DTL 情報を削除しました');

        return redirect('micategorydtls');
    }
}
