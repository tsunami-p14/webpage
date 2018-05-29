<?php

namespace App\Http\Controllers;

use App\I_quality_lvl;
use App\I_supply;
use App\Item;
use App\Location;
use App\M_i_qlty_category;
use App\M_item;
use App\M_shop;
use App\Shelf;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiController extends Controller
{
    //
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function items()
    {
        return Item::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function item($id)
    {
        $item = Item::findOrFail($id);

        return $item;
    }

    public function relmitemsitemPages($id)
    {
        $items = Item::whereHas('m_items', function ($q) use ($id) {
//            $q->where('m_items.id',$id)->where('m_items.typecode','LIKE','%itemtest%');
            $q->where('m_items.id', $id);
        })
            ->with('m_shops')
            ->with('i_supplies.m_supplies')
            ->with('i_quality_lvls')
            ->with('m_i_qlty_categories')
            ->paginate(3)//            ->get()
        ;


//        $items= M_item::with('items')
//            ->with('items.m_shops')
//            ->with('items.i_supplies.m_supplies')
//            ->with('items.i_quality_lvls')
//            ->with('items.m_i_qlty_categories')
//            ->whereHas('items',function($q){
//                $q->where('name','like','%test1-2%');
//            })
//            ->find($id);

        //        $items= M_item::with('items')
//            ->whereHas('items',function($q){
//                $q->where('name','like','%test1-2%');
//            })
//            ->get();
//            dd($items);

        $items->map(function ($items) {
            $items->m_shops()->paginate(3);
            $items->i_supplies()->paginate(3);
            $items->i_quality_lvls()->paginate(3);
            $items->m_i_qlty_categories()->paginate(3);
        });


//        ->with('items.m_shops')
//        ->with('items.i_supplies.m_supplies')
//        ->with('items.i_quality_lvls')
//        ->with('items.m_i_qlty_categories')
//

        return response()->json($items);
    }

    /**
     * @param $id
     * @return array|string
     */
    public function relmitemsitems($id)
    {
        $mitem = M_item::with('items')
            ->with('items.m_shops')
            ->with('items.i_supplies.m_supplies')
            ->with('items.i_quality_lvls')
            ->with('items.m_i_qlty_categories')
            ->get();
//        dd($mitem);
        $items = $mitem->find($id);

        if (!empty($items->items)) {
            $ret = $items->items;
        } else {
            $ret = [];
        }

        return $ret;

    }

    public function relitems($id)
    {

        $item = Item::with('m_items')
            ->with('m_shops')
            ->with('m_i_qlty_categories')
            ->with('i_quality_lvls')
            ->with('i_supplies.m_supplies')
            ->get()->find($id);

        return $item;

    }


    public function relSupplyid($id)
    {
        $item = Item::with('i_supplies')
            ->get()
            ->find($id)
            ->i_supplies
            ->first()->id;

        return $item;


    }


    /**
     * @param $id
     */
    public function getMsupplies($id)
    {
        $isply = I_supply::with('m_supplies')->get();
        $msply = $isply->find($id);
        if (!empty($msply->m_supplies)) {
            $ret = $msply->m_supplies;
        } else {
            $ret = [];
        }

        return $ret;
    }

    public function getMshops()
    {
        $ret = M_shop::all();

        return $ret;
    }

    public function getMshop($id)
    {
        $ret = Item::with('m_shops')->get();
        $ret = $ret->find($id)->m_shops->pluck('id')->all();

        return $ret;
    }

    public function getQualitys()
    {

        $ret = I_quality_lvl::with('M_i_qlty_categories')->get();

        return $ret;
    }

    public function getMQuality($id)
    {
        $ret = Item::with('M_i_qlty_categories')
            ->get()
            ->find($id)->M_i_qlty_categories->first()->id;;

        return $ret;
    }

    public function getQuality($id)
    {
        $ret = Item::with('i_quality_lvls')
            ->get()
            ->find($id)->i_quality_lvls->first()->id;

        return $ret;

    }


    public function getQCategories($id)
    {

        $ret = I_quality_lvl::with('M_i_qlty_categories')->get()->find($id)->M_i_qlty_categories;

        return $ret;
    }

    public function getShelves()
    {
        $ret = Shelf::all();
        return $ret;
    }

    public function getLocations($id)
    {


//        $ret = Location::with('shelves')->get()->find($id);
        $ret = Shelf::with('locations')->get()->find($id)->locations;
//        $ret = Location::all();
//        dd($ret);
        return $ret;
    }

    public  function  stockCounter($id)
    {

        $ret = Stock::whereHas('items', function ($q) use ($id) {
            $q->where('items.id', $id);
        })->where('selflg','0')->get();

        return $ret->count();

    }



}
