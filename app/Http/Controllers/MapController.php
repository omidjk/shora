<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\map;
use DB;


class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = map::sortable()->paginate(10);
        return view('ghorfeh.map.index', compact('maps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $odirection['data']=map::getdirection();
        $ostreet['data']=map::getstreet();
        $oplace1['data']=map::getplace();
        $oplace2['data']=map::getplace();
        return view('ghorfeh.map.create')->with("odirection",$odirection)->with("ostreet", $ostreet)->with("oplace1",$oplace1)->with("oplace2",$oplace2);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('mapphoto')){

            // Get filename with extension
            $fileameWithExt = $request->file('mapphoto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($fileameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('mapphoto')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('mapphoto')->storeAs('public/map', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $validatedData = $request->validate([
            'direction' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'place1' => 'required|string|max:255',
            'beetween1' => 'required|string|max:255',
            'place2' => 'required|string|max:255',
            'beetween2' => 'required|string|max:255',
            'mapphoto.*' => 'required|image|mimes:jpg,jpeg,png,bmp|max:20000',


        ]
            ,[
                'mapphoto.*.required' => 'لطفا تصویر را آپلو کنید',
                'mapphoto.*.mimes' => 'فقط فرمتهای مجاز را آپلود نمایید',
                'mapphoto.*.max' => 'حجم فایل نمی تواند بیشتر از 20 مگابایت باشد',
            ]);
        $validatedData['mapphoto']=$fileNameToStore;
        $map = map::create($validatedData);

        return redirect('/maps')->with('success', 'نقشه افزوده شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(map $map)
    {
        return view('ghorfeh.map.show', compact('map'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maps = map::findOrFail($id);
        $odirection['data']=map::getdirection();
        $ostreet['data']=map::getstreet();
        $oplace1['data']=map::getplace();
        $oplace2['data']=map::getplace();
        return view('ghorfeh.map.edit', compact('maps'))->with("odirection",$odirection)->with("ostreet", $ostreet)->with("oplace1",$oplace1)->with("oplace2",$oplace2);
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
        if($request->hasfile('mapphoto')){

            // Get filename with extension
            $fileameWithExt = $request->file('mapphoto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($fileameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('mapphoto')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('mapphoto')->storeAs('public/map', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $validatedData = $request->validate([
                'direction' => 'required|string|max:255',
                'street' => 'required|string|max:255',
                'place1' => 'required|string|max:255',
                'beetween1' => 'required|string|max:255',
                'place2' => 'required|string|max:255',
                'beetween2' => 'required|string|max:255',
                'mapphoto.*' => 'required|image|mimes:jpg,jpeg,png,bmp|max:20000',
            ]
            ,[
                'mapphoto.*.required' => 'لطفا تصویر را آپلو کنید',
                'mapphoto.*.mimes' => 'فقط فرمتهای مجاز را آپلود نمایید',
                'mapphoto.*.max' => 'حجم فایل نمی تواند بیشتر از 20 مگابایت باشد',
            ]);
        $validatedData['mapphoto']=$fileNameToStore;

        map::whereId($id)->update($validatedData);
        return redirect('/maps')->with('success', 'ویرایش مشخصات با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maps = map::findOrFail($id);
        $maps->delete();

        return redirect('/maps')->with('success', 'حذف با موفقیت انجام شد');
    }
}
