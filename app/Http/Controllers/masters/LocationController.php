<?php

namespace App\Http\Controllers\masters;

use App\Http\Requests\LocationRequest;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Location::all();
        return view('masters.locations',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masters.locationcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationRequest $request)
    {
        //
        $response= Location::create($request->all());

        \Session::flash('flash_message','Location 情報を追加しました');
        return redirect('locations');

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
        $item = Location::findOrFail($id);
        return view('masters.locationshow',compact('item'));
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
        $item = Location::findOrFail($id);
        return view('masters.locationedit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LocationRequest $request, $id)
    {
        //
        $item= Location::findOrFail($id);
        $item->update($request->all());
        \Session::flash('flash_message','Location情報を更新しました');
        return view('masters.locationshow',compact('item'));
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
        $item = Location::findOrFail($id);
        $item->delete();
        \Session::flash('flash_message','Location情報を削除しました');

        return redirect('locations');
    }
}
