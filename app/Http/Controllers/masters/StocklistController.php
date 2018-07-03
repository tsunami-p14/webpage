<?php

namespace App\Http\Controllers\masters;

use App\Stock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StocklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $req = $request->input("keywords");

//        $stockers  = Stock::whereHas(
//            'items',function($q) use ($item){
//            $q->where('items.id','=',$item->id);
//        }
//        )->with('items')->paginate(10);

        //stockからみたデータをリスト化
        $stocks=Stock::with("items.m_items.i_categories.m_i_categories")
            ->with("items.i_quality_lvls")
            ->with("items.m_i_qlty_categories")
            ->with("items.m_items.m_makers")
            ->with("items.m_items.i_interfaces.m_i_interfaces")
            ->with("items.m_items.i_functions.m_i_function_dtls")
            ->with("locations")
            ->with("shelves")
            ->where("serial","like","%".$req."%")
            ->orwhereHas('items.m_items',function ($q) use ($req) {
                $q->where("m_items.typecode",'like',"%".$req."%");
            } )
            ->orderBy("updated_at","desc")
            ->paginate(30);


//        $stocks=Stock::with("items.m_items.m_makers")
//            ->get();


//        dd($stocks);

        return view("masters.stocklists")
            ->with('stocks',$stocks)
            ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
