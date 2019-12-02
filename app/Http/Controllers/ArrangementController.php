<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\arrangement;

class ArrangementController extends Controller
{
    function __construct()

    {

        $this->middleware('permission:Arrangement-list|Arrangement-create|Arrangement-edit|Arrangement-delete', ['only' => ['index','show']]);

        $this->middleware('permission:Arrangement-create', ['only' => ['create','store']]);

        $this->middleware('permission:Arrangement-edit', ['only' => ['edit','update']]);

        $this->middleware('permission:Arrangement-delete', ['only' => ['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrangements = arrangement::sortable()->paginate(10);

        return view('ghorfeh.arrangement.index', compact('arrangements'));
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getmarasem['data']=arrangement::getmarasem();
        $gettablelist['data']=arrangement::gettablelist();
        $getfieldlist['data']=arrangement::getfieldlist();
        $getfontfamily['data']=arrangement::getfontfamily();
        $getfontnamefamily['data']=arrangement::getfontfamily();
        return view('ghorfeh.arrangement.create',compact('table'))->with("getmarasem",$getmarasem)->with("gettablelist",$gettablelist)->with("getfontfamily",$getfontfamily)->with("getfontnamefamily",$getfontnamefamily);
    }
    public function fieldlist($tablename){

        $fieldname['data'] = arrangement::getfieldlist($tablename);
        echo json_encode($fieldname);
        exit;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('ritephoto')){

            // Get filename with extension
            $fileameWithExt = $request->file('ritephoto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($fileameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('ritephoto')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('ritephoto')->storeAs('public/map', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $validatedData = $request->validate([
            'riteid' => 'required|numeric',
            'ritephoto.*' => 'required|image|mimes:jpg,jpeg,png,bmp|max:20000',
            'riteelement' => 'required|string|max:255',
            'elementtable' => 'required|string|max:255',
            'elementname' => 'nullable|string|max:255',
            'elementfontsize' => 'nullable|string|max:255',
            'elementfontname' => 'nullable|string|max:255',
            'elementcolor' => 'nullable|string|max:255',
            'elementnamefontsize' => 'nullable|string|max:255',
            'elementnamefontname' => 'nullable|string|max:255',
            'elementnamecolor' => 'nullable|string|max:255',
        ]
            ,[
                'ritephoto.*.required' => 'لطفا تصویر را آپلو کنید',
                'ritephoto.*.mimes' => 'فقط فرمتهای مجاز را آپلود نمایید',
                'ritephoto.*.max' => 'حجم فایل نمی تواند بیشتر از 20 مگابایت باشد',
            ]);
        $validatedData['ritephoto']=$fileNameToStore;
        $arrangements = arrangement::create($validatedData);

        return redirect('/arrangement')->with('success', 'تنظیمات انجام شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arrangements = arrangement::findOrFail($id);

        return view('ghorfeh.arrangement.show', compact('arrangements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arrangements = arrangement::findOrFail($id);
        return view('ghorfeh.arrangement.edit', compact('arrangements'));
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
        if($request->hasfile('ritephoto')){

            // Get filename with extension
            $fileameWithExt = $request->file('ritephoto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($fileameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('ritephoto')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('ritephoto')->storeAs('public/map', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $validatedData = $request->validate([
            'riteid' => 'required|numeric',
            'ritephoto.*' => 'required|max:255',
            'riteelement' => 'required|max:255',
            'elementtable' => 'required|max:255',
            'elementname' => 'nullable|max:255',
            'elementfontsize' => 'nullable|max:255',
            'elementfontname' => 'nullable|max:255',
            'elementcolor' => 'nullable|max:255',
            'elementnamefontsize' => 'nullable|max:255',
            'elementnamefontname' => 'nullable|max:255',
            'elementnamecolor' => 'nullable|max:255',
        ],[
            'ritephoto.*.required' => 'لطفا تصویر را آپلو کنید',
            'ritephoto.*.mimes' => 'فقط فرمتهای مجاز را آپلود نمایید',
            'ritephoto.*.max' => 'حجم فایل نمی تواند بیشتر از 20 مگابایت باشد',
        ]);
        $validatedData['ritephoto']=$fileNameToStore;
        arrangement::whereId($id)->update($validatedData);

        return redirect('/arrangement')->with('success', 'ویرایش مشخصات با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arrangements = arrangement::findOrFail($id);
        $arrangements->delete();

        return redirect('/arrangement')->with('success', 'حذف با موفقیت انجام شد');
    }
}
