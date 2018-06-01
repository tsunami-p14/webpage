<?php

namespace App\Http\Controllers\masters;

use App\I_category;
use App\I_function;
use App\I_interface;
use App\I_supply;
use App\Item;
use App\M_item;
use App\M_maker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $items = Item::all();
        //Itemからみた全てのデータ取得
        $items = Item::with('m_shops')
            ->with('m_items')
            ->with('i_supplies.m_supplies')
            ->with('m_i_qlty_categories.i_quality_lvls')
            ->with('m_items.i_categories.m_i_categories.m_i_category_dtls')
            ->with('m_items.i_functions.m_i_function_dtls')
            ->with('m_items.i_interfaces.m_i_interfaces')
            ->with('stocks')
            ->get();
        //表示系に必要なデータ一群

        //Mitemの全データ
        $mitems = M_item::
        with('m_makers')
            ->with('i_categories.m_i_categories.m_i_category_dtls')
            ->with('i_functions.m_i_function_dtls')
            ->with('i_interfaces.m_i_interfaces')
            ->get();

        $makerinfor= M_maker::all();
        $icategoryall= I_category::with('m_i_categories.m_i_category_dtls')->get();
        $ifunctionall= I_function::with('m_i_function_dtls')->get();
        $iinterfaceall=I_interface::with('m_i_interfaces')->get();

        return view('masters.items')
            ->with('items',$items)
            ->with('mitems',$mitems)
            ->with('makerinfor',$makerinfor)
            ->with('icategoryall',$icategoryall)
            ->with('ifunctionall',$ifunctionall)
            ->with('iinterfaceall',$iinterfaceall)
            ->with('mitemid',0)
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

        return view('masters.itemcreate')
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        //

        $item=item::create($request->all());
        $item->m_items()->sync($request->input('m_item_id'));
        $item->i_supplies()->sync($request->input('i_supply_id'));
        $item->m_shops()->sync($request->input('shop_list',[]));
        $item->i_quality_lvls()->sync($request->input('i_quality_lvl_id'));
        $item->m_i_qlty_categories()->sync($request->input('m_i_qlty_category_id'));



        \Session::flash('flash_message','item 情報を追加しました');
        return redirect('items');

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
//        $items = Item::all();
        //Itemからみた全てのデータ取得
        $items = Item::with('m_shops')
            ->with('m_items')
            ->with('i_supplies.m_supplies')
            ->with('m_i_qlty_categories.i_quality_lvls')
            ->with('m_items.i_categories.m_i_categories.m_i_category_dtls')
            ->with('m_items.i_functions.m_i_function_dtls')
            ->with('m_items.i_interfaces.m_i_interfaces')
            ->with('stocks')
            ->get();
        //表示系に必要なデータ一群

        //Mitemの全データ
        $mitems = M_item::
        with('m_makers')
            ->with('i_categories.m_i_categories.m_i_category_dtls')
            ->with('i_functions.m_i_function_dtls')
            ->with('i_interfaces.m_i_interfaces')
            ->get();

        $makerinfor= M_maker::all();
        $icategoryall= I_category::with('m_i_categories.m_i_category_dtls')->get();
        $ifunctionall= I_function::with('m_i_function_dtls')->get();
        $iinterfaceall=I_interface::with('m_i_interfaces')->get();

        return view('masters.items')
            ->with('items',$items)
            ->with('mitems',$mitems)
            ->with('makerinfor',$makerinfor)
            ->with('icategoryall',$icategoryall)
            ->with('ifunctionall',$ifunctionall)
            ->with('iinterfaceall',$iinterfaceall)
            ->with('mitemid',$id)
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

        return view('masters.itemedit')
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

//        return view('masters.itemedit',compact('mitem','makers','makerinfor', 'icategory', 'icategoryall','ifunction','ifunctionall','iinterface','iinterfaceall'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemRequest $request, $id)
    {
        //
        $item= Item::findOrFail($id);
        $item->update($request->all());
        $item->m_items()->sync($request->input('m_item_id'));
        $item->i_supplies()->sync($request->input('i_supply_id'));
        $item->m_shops()->sync($request->input('shop_list',[]));
        $item->i_quality_lvls()->sync($request->input('i_quality_lvl_id'));
        $item->m_i_qlty_categories()->sync($request->input('m_i_qlty_category_id'));

        \Session::flash('flash_message','Item 情報を編集しました');
//        return redirect()->action('masters\ItemController@show',['id'=>$request->input('m_item_id')]);
        return back();
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
        $item= Item::findOrFail($id);
        $item->m_items()->detach();
        $item->i_supplies()->detach();
        $item->m_shops()->detach();
        $item->i_quality_lvls()->detach();
        $item->m_i_qlty_categories()->detach();
        $item->delete();
        \Session::flash('flash_message','ITEM Master 情報を削除しました');
        return response()->json($item);

    }
}
