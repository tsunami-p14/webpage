<?php

namespace App\Http\Controllers\masters;

use App\m_maker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MakerRequest;

class MakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = m_maker::all();
        return view('masters.makers',compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masters.makercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MakerRequest $request)
    {
        //
        m_maker::create($request->all());
        \Session::flash('flash_message','メーカー情報を追加しました');
        return redirect('makers');
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
        $data = m_maker::findOrFail($id);
        return view('masters.makershow',compact('data'));
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
        $data = m_maker::findOrFail($id);
        return view('masters.makeredit',compact('data'));

//        return ($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MakerRequest $request, $id)
    {
        //
        $data= m_maker::findOrFail($id);
        $data->update($request->all());
        \Session::flash('flash_message','メーカー情報を更新しました');
//        return redirect()->route('masters.makershow',[$data->id]);
        return view('masters.makershow',compact('data'));

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
        $data = m_maker::findOrFail($id);
        $data->delete();
        \Session::flash('flash_message','メーカー情報を削除しました');

        return redirect('makers');

    }
}
