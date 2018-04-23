<?php

namespace App\Http\Controllers\masters;

use App\I_function;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IfunctionController extends Controller
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
        return view('masters.ifunctions',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masters.ifunctioncreate');
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
        $response=I_function::create($request->all());

        \Session::flash('flash_message','item Function 情報を追加しました');
        return redirect('ifunctions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\I_function  $i_function
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = I_function::findOrFail($id);
        return view('masters.ifunctionshow',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\I_function  $i_function
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = I_function::findOrFail($id);
        return view('masters.ifunctionedit',compact('data') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\I_function  $i_function
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $data= I_function::findOrFail($id);
        $data->update($request->all());
        \Session::flash('flash_message','I Function 情報を更新しました');
        return view('masters.ifunctionshow',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\I_function  $i_function
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = I_function::findOrFail($id);
        $data->delete();
        \Session::flash('flash_message','Item Function 情報を削除しました');

        return redirect('ifunctions');

    }
}
