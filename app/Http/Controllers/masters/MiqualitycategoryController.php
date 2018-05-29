<?php

namespace App\Http\Controllers\masters;

use App\M_i_qlty_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MiqualitycategoryRequest;

class MiqualitycategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = M_i_qlty_category::all();
        return view('masters.miqualitycategories',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masters.miqualitycategorycreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MiqualitycategoryRequest $request)
    {
        //
        $response=M_i_qlty_category::create($request->all());

        \Session::flash('flash_message','Quality Category Master 情報を追加しました');
        return redirect('miqualitycategories');
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
        $item = M_i_qlty_category::findOrFail($id);
        return view('masters.miqualitycategoryshow',compact('item'));
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
        $item = M_i_qlty_category::findOrFail($id);
        return view('masters.miqualitycategoryedit',compact('item'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MiqualitycategoryRequest $request, $id)
    {
        //
        $item= M_i_qlty_category::findOrFail($id);
        $item->update($request->all());
        \Session::flash('flash_message','Quality Category Master情報を更新しました');
        return view('masters.miqualitycategoryshow',compact('item'));
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
        $item = M_i_qlty_category::findOrFail($id);
        $item->delete();
        \Session::flash('flash_message','Quality Category Master 情報を削除しました');

        return redirect('miqualitycategories');
    }
}
