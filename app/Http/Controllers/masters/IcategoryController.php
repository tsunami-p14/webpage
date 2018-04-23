<?php

namespace App\Http\Controllers\masters;

use App\I_category;
use App\M_i_category;
use App\M_i_category_dtl;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\IcategoryRequest;

class IcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = I_category::all();
        return view('masters.icategories',compact('datas'));
//        $datas = m_i_category::pluck('name','id');
//        return view('masters.icategories',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mic=M_i_category::pluck('name','id');
        $micdtl=M_i_category_dtl::pluck('name','id');
        return view('masters.icategorycreate',compact('mic','micdtl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IcategoryRequest $request)
    {
        //
        $response=I_category::create($request->all());

//        $response->mics()->attach($request->input('mi_category'),['i_category_id'=>$response->id]);
//        $response->m_i_categories()->sync($request->input('mi_category'),$request->input('mi_categorydtl'));
//        $response->m_i_category_dtls()->attach($request->input('mi_categorydtl'));

        \Session::flash('flash_message','item category 情報を追加しました');
        return redirect('icategories');
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
        $data = I_category::findOrFail($id);
        return view('masters.icategoryshow',compact('data'));
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
        $mic=M_i_category::pluck('name','id');
        $micdtl=M_i_category_dtl::pluck('name','id');
        $data = I_category::findOrFail($id);
        return view('masters.icategoryedit',compact('data','mic','micdtl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IcategoryRequest $request, $id)
    {
        //
        $data= I_category::findOrFail($id);
        $data->update($request->all());
        \Session::flash('flash_message','Item Category 情報を更新しました');
        return view('masters.icategoryshow',compact('data'));
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
        $data = I_category::findOrFail($id);
        $data->delete();
        \Session::flash('flash_message','Item Category 情報を削除しました');

        return redirect('icategories');
    }
}
