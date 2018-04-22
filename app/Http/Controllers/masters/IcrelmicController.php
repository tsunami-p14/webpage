<?php

namespace App\Http\Controllers\masters;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\i_category;
use App\m_i_category;

class IcrelmicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = i_category::all();
        return view('masters.icrelmic',compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datas = i_category::all();
        return view('masters.icategories',compact('datas'));
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
        $data = i_category::findOrFail($id);
        return view('masters.icrelmicshow',compact('data'));
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
        $mic=m_i_category::pluck('name','id');
        $data = i_category::findOrFail($id);
        return view('masters.icrelmicedit',compact('data','mic'));
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
        //
        $data= i_category::findOrFail($id);
        $data->update($request->all());
        $data->m_i_categories()->sync($request->input('mi_category',[]));

        \Session::flash('flash_message','M Item Categoryと詳細情報のrelationを更新しました');
        return view('masters.icrelmicshow',compact('data'));

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
