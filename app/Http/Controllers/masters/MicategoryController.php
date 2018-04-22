<?php

namespace App\Http\Controllers\masters;

use App\Http\Requests\MicategoryRequest;
use App\m_i_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MicategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = m_i_category::all()->sortBy('sort_order');
        return view('masters.micategories',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masters.micategoriescreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MicategoryRequest $request)
    {
        //
        m_i_category::create($request->all());
        \Session::flash('flash_message','M Item Category 情報を追加しました');
        return redirect('micategories');
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
        return view('masters.micategoryshow',compact('data'));

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
        $data = m_i_category::findOrFail($id);
        return view('masters.micategoryedit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MicategoryRequest $request, $id)
    {
        //
        $data= m_i_category::findOrFail($id);
        $data->update($request->all());
        \Session::flash('flash_message','M Item Category 情報を更新しました');
        return view('masters.micategoryshow',compact('data'));
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
        $data = m_i_category::findOrFail($id);
        $data->delete();
        \Session::flash('flash_message','M Item Category 情報を削除しました');

        return redirect('micategories');
    }
}
