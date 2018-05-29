<?php

namespace App\Http\Controllers\masters;

use App\Http\Requests\StockRequest;
use App\I_category;
use App\I_function;
use App\I_interface;
use App\I_supply;
use App\Item;
use App\M_item;
use App\M_maker;
use App\Stock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::with('m_shops')
            ->with('m_items')
            ->with('i_supplies.m_supplies')
            ->with('m_i_qlty_categories.i_quality_lvls')
            ->with('m_items.i_categories.m_i_categories.m_i_category_dtls')
            ->with('m_items.i_functions.m_i_function_dtls')
            ->with('m_items.i_interfaces.m_i_interfaces')
            ->get();

        $mitems = M_item::
        with('m_makers')
            ->with('i_categories.m_i_categories.m_i_category_dtls')
            ->with('i_functions.m_i_function_dtls')
            ->with('i_interfaces.m_i_interfaces')->get();
        ;

        //表示系に必要なデータ一群
        $makerinfor= M_maker::all();
        $icategoryall= I_category::with('m_i_categories.m_i_category_dtls')->get();
        $ifunctionall= I_function::with('m_i_function_dtls')->get();
        $iinterfaceall=I_interface::with('m_i_interfaces')->get();
        $isupplyall=I_supply::with('m_supplies')->get();

        return view('masters.stockcreate')
            ->with('items',$items)
            ->with('mitems',$mitems)
            ->with('makerinfor',$makerinfor)
            ->with('icategoryall',$icategoryall)
            ->with('ifunctionall',$ifunctionall)
            ->with('iinterfaceall',$iinterfaceall)
            ->with('isupplyall',$isupplyall)
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
    public function store(StockRequest $request)
    {
        //
        $item_id = $request->input('item_id');
        $response = Stock::create($request->all());
        $response->shelves()->sync($request->input('shelf_id'));
        $response->locations()->sync($request->input('location_id'));
        $response->items()->sync($request->input('item_id'));
        \Session::flash('flash_message','stock 情報を追加しました');
        return back();

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
        $mitems = M_item::
        with('m_makers')
            ->with('i_categories.m_i_categories.m_i_category_dtls')
            ->with('i_functions.m_i_function_dtls')
            ->with('i_interfaces.m_i_interfaces')->get();
        ;

        $item = Item::with('m_items')->get()->find($id);
        $mitemobj = $item->m_items->first();

        if($mitemobj===null){
            $mitemid = 0;
        }else{
            $mitemid = $mitemobj->id;
        };


        //表示系に必要なデータ一群
        $makerinfor= M_maker::all();
        $icategoryall= I_category::with('m_i_categories.m_i_category_dtls')->get();
        $ifunctionall= I_function::with('m_i_function_dtls')->get();
        $iinterfaceall=I_interface::with('m_i_interfaces')->get();
        $isupplyall=I_supply::with('m_supplies')->get();

        return view('masters.stockedit')
            ->with('itemid',$id)
            ->with('item',$item)
            ->with('mitemid',$mitemid)
            ->with('mitems',$mitems)
            ->with('makerinfor',$makerinfor)
            ->with('icategoryall',$icategoryall)
            ->with('ifunctionall',$ifunctionall)
            ->with('iinterfaceall',$iinterfaceall)
            ->with('isupplyall',$isupplyall)
            ;
    }


    public function add($id)
    {

        $item = Item::with('m_items')
            ->with('i_supplies.m_supplies')
            ->with('m_i_qlty_categories.i_quality_lvls')
            ->with('i_quality_lvls')
            ->with('m_shops')
            ->with('stocks.shelves')
            ->with('stocks.locations')
            ->with('stocks')
            ->get()->find($id);
        $mitemobj = $item->m_items->first();

        if($mitemobj===null){
            $mitemid = 0;
        }else{
            $mitemid = $mitemobj->id;
        };

        $mitem = M_item::with('m_makers')
            ->with('i_categories.m_i_categories.m_i_category_dtls')
            ->with('i_functions.m_i_function_dtls')
            ->with('i_interfaces.m_i_interfaces')->get()->find($mitemid)
        ;

//        dd($item);


        //表示系に必要なデータ一群
        $makerinfor= M_maker::all();
        $icategoryall= I_category::with('m_i_categories.m_i_category_dtls')->get();
        $ifunctionall= I_function::with('m_i_function_dtls')->get();
        $iinterfaceall=I_interface::with('m_i_interfaces')->get();
        $isupplyall=I_supply::with('m_supplies')->get();

        return view('masters.stockadd')
            ->with('itemid',$id)
            ->with('item',$item)
            ->with('mitemid',$mitemid)
            ->with('mitem',$mitem)
            ->with('makerinfor',$makerinfor)
            ->with('icategoryall',$icategoryall)
            ->with('ifunctionall',$ifunctionall)
            ->with('iinterfaceall',$iinterfaceall)
            ->with('isupplyall',$isupplyall)
            ;


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
     * @param $id stockid
     * @param $itemid itemid
     */
    public function editor($id,$itemid)
    {

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


    /**
     * @param $id
     * @return mixed
     */
    public function new($id)
    {
        $item = Item::with('m_items')
            ->with('i_supplies.m_supplies')
            ->with('m_i_qlty_categories.i_quality_lvls')
            ->with('i_quality_lvls')
            ->with('m_shops')
            ->with('stocks.shelves')
            ->with('stocks.locations')
            ->with('stocks')
            ->get()->find($id);
        $mitemobj = $item->m_items->first();

        if($mitemobj===null){
            $mitemid = 0;
        }else{
            $mitemid = $mitemobj->id;
        };

        $mitem = M_item::with('m_makers')
            ->with('i_categories.m_i_categories.m_i_category_dtls')
            ->with('i_functions.m_i_function_dtls')
            ->with('i_interfaces.m_i_interfaces')->get()->find($mitemid)
        ;

//        dd($item);


        //表示系に必要なデータ一群
        $makerinfor= M_maker::all();
        $icategoryall= I_category::with('m_i_categories.m_i_category_dtls')->get();
        $ifunctionall= I_function::with('m_i_function_dtls')->get();
        $iinterfaceall=I_interface::with('m_i_interfaces')->get();
        $isupplyall=I_supply::with('m_supplies')->get();

        return view('masters.stocknew')
            ->with('itemid',$id)
            ->with('item',$item)
            ->with('mitemid',$mitemid)
            ->with('mitem',$mitem)
            ->with('makerinfor',$makerinfor)
            ->with('icategoryall',$icategoryall)
            ->with('ifunctionall',$ifunctionall)
            ->with('iinterfaceall',$iinterfaceall)
            ->with('isupplyall',$isupplyall)
            ;

    }
}
