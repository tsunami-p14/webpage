<?php

namespace App\Http\Controllers\masters;

use App\I_category;
use App\I_function;
use App\I_interface;
use App\M_i_category;
use App\m_i_interface;
use App\M_maker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\M_item;
use App\Http\Requests\MitemRequest;

class MitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = M_item::all();
        return view('masters.mitems',compact('datas'));
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
        $makers= M_maker::pluck('name','id');
        $makerinfor= M_maker::pluck('infor','id');
        $icategory= I_category::pluck('name','id');
//        relationのrelationまで取ってくる START
        $icategoryall= I_category::with('m_i_categories.m_i_category_dtls')->get();
//        relationのrelationまで取ってくる END
        $ifunction = I_function::pluck('name','id');
        $ifunctionall= I_function::with('m_i_function_dtls')->get();

        $iinterface = I_interface::pluck('name','id');
        $iinterfaceall=I_interface::with('m_i_interfaces')->get();


        return view('masters.mitemcreate',compact('makers','makerinfor', 'icategory', 'icategoryall','ifunction','ifunctionall','iinterface','iinterfaceall'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MitemRequest $request)
    {
        //
//        var_dump($request->all());
        M_item::create($request->all());

        \Session::flash('flash_message','Master item 情報を追加しました');
        return redirect('mitems');

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
