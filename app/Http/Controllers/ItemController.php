<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id=$request->id;
        if(empty($id))
        {
            $item = item::sortable()->paginate(10);
        }else{
            $item = item::where('ghorfehid',$id)->sortable()->paginate(10);
        }

        return view('ghorfeh.item.index', compact('item','id'));
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ghorfehid=$request->ghorfehid;
        $getitems['data']=item::getitems();
        return view('ghorfeh.item.create', compact('item','ghorfehid'))->with("getitems", $getitems);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ghorfehid' => 'nullable|numeric',
            'itemtype' => 'required|string|max:255',
            'itemname' => 'required|string|max:255',
            'itemnumber' => 'required|numeric',
        ]);

        $item = item::create($validatedData);

        return redirect('/item')->with('success', 'افزوده شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
        return view('ghorfeh.item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = item::findOrFail($id);
        $getitems['data']=item::getitems();
        return view('ghorfeh.item.edit', compact('item'))->with("getitems",$getitems);
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
        $validatedData = $request->validate([
            'ghorfehid' => 'nullable|numeric',
            'itemtype' => 'required|string|max:255',
            'itemname' => 'required|string|max:255',
            'itemnumber' => 'required|numeric',
        ]);
        item::whereId($id)->update($validatedData);

        return redirect('/item')->with('success', 'ویرایش مشخصات با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = item::findOrFail($id);
        $item->delete();
        return redirect('/item')->with('success', 'حذف با موفقیت انجام شد');
    }
}
