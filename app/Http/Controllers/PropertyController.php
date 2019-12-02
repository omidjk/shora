<?php

namespace App\Http\Controllers;

use App\property;
use DB;
use Illuminate\Http\Request;


class PropertyController extends Controller
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
            $property = property::sortable()->paginate(10);
        }else{
            $property = property::where('mapid',$id)->sortable()->paginate(10);
        }

        return view('ghorfeh.property.index', compact('property','id'));
//

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $property=property::all();
        $mapid=$request->mapid;
        return view('ghorfeh.property.create', compact('property','mapid'));
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
            'mapid' => 'nullable|numeric',
            'propertyname' => 'required|string|max:255',
            'width' => 'required|numeric',
            'pelakno' => 'required|string|max:255',
        ]);

        $properties = property::create($validatedData);

        return redirect('/property')->with('success', 'ملک افزوده شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(property $property)
    {

        return view('ghorfeh.property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties = property::findOrFail($id);
        return view('ghorfeh.property.edit', compact('properties'));
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
            'mapid' => 'nullable|numeric',
            'propertyname' => 'required|string|max:255',
            'width' => 'required|numeric',
            'pelakno' => 'required|string|max:255',
        ]);
        property::whereId($id)->update($validatedData);

        return redirect('/property')->with('success', 'ویرایش مشخصات با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $properties = property::findOrFail($id);
        $properties->delete();
        return redirect('/property')->with('success', 'حذف با موفقیت انجام شد');
    }
}
