<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\office;
use DB;

class OfficeController extends Controller
{
    function __construct()

    {

        $this->middleware('permission:office-list|office-create|office-edit|office-delete', ['only' => ['index','show']]);

        $this->middleware('permission:office-create', ['only' => ['create','store']]);

        $this->middleware('permission:office-edit', ['only' => ['edit','update']]);

        $this->middleware('permission:office-delete', ['only' => ['destroy']]);

    }
    public function index()
    {
        $offices=office::sortable()->paginate(10);
        return view('baseinfo.office.index', compact('offices'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //  $provinces = DB::table("province")->pluck("pname","id");
        $oprovince['data']=office::oprovince();
        return view('baseinfo.office.create')->with("oprovince",$oprovince);

    }
    public function city($oprovinceid){

        // Fetch Employees by Departmentid
        $cityData['data'] = office::city($oprovinceid);
        echo json_encode($cityData);
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
        if($request->hasfile('bulidingmaps')){

            // Get filename with extension
        $fileameWithExt = $request->file('bulidingmaps')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($fileameWithExt, PATHINFO_FILENAME);
        // Get just extension
        $extension = $request->file('bulidingmaps')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        // Upload Image
        $path = $request->file('bulidingmaps')->storeAs('public/buldingmaps', $fileNameToStore);

    } else {
        $fileNameToStore = 'noimage.jpg';
    }
        $validatedData = $request->validate([
            'officename' => 'required|string|max:255',
            'officecode' => 'required|numeric',
            'province' => 'required|max:255',
            'city' => 'nullable|max:255',
            'age' => 'required|numeric',
            'floors' => 'required|numeric',
            'units' => 'required|numeric',
            'guestroom' => 'required|string|max:255',
            'structure' => 'required|string|max:255',
            'frontage' => 'required|string|max:255',
            'firealarm' => 'required|string|max:255',
            'fireext' => 'required|string|max:255',
            'shield' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'usage' => 'required|string|max:255',
            'ownership' => 'required|string|max:255',
            'organsposition' => 'required|string|max:255',
            'population' => 'required|string|max:255',
            'leaderagent' => 'nullable|string|max:255',
            'governor' => 'nullable|string|max:255',
            'provincecouncil' => 'nullable|string|max:255',
            'commanderarmy' => 'nullable|string|max:255',
            'commanderpolice' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'postalcode' => 'required|string|max:255',
            'phonenumber' => 'required|numeric',
            'mobile' => 'required|numeric',
            'bulidingmaps' => 'nullable|image|mimes:jpg,jpeg,png,bmp|max:20000',
        ]
            ,[
                'bulidingmaps.*.required' => 'لطفا تصویر را آپلو کنید',
                'bulidingmaps.*.mimes' => 'فقط فرمتهای مجاز را آپلود نمایید',
                'bulidingmaps.*.max' => 'حجم فایل نمی تواند بیشتر از 20 مگابایت باشد',
            ]
        );
        $validatedData['bulidingmaps']=$fileNameToStore;
        $offices = office::create($validatedData);
        return redirect('/office')->with('success', 'ارگان افزوده شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offices = office::findOrFail($id);

        return view('baseinfo.office.show', compact('offices'))->with("oprovince",$oprovince);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offices = office::findOrFail($id);
        $oprovince['data']=office::oprovince();
        return view('baseinfo.office.edit',compact('offices'))->with("oprovince",$oprovince);
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
        if($request->hasfile('bulidingmaps')){

            // Get filename with extension
            $fileameWithExt = $request->file('bulidingmaps')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($fileameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('bulidingmaps')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('bulidingmaps')->storeAs('public/buldingmaps', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $validatedData = $request->validate([
            'officename' => 'required|string|max:255',
            'officecode' => 'required|numeric',
            'province' => 'required|string|max:255',
            'city' => 'nullable|max:255',
            'age' => 'required|numeric',
            'floors' => 'required|numeric',
            'units' => 'required|numeric',
            'guestroom' => 'required|string|max:255',
            'structure' => 'required|string|max:255',
            'frontage' => 'required|string|max:255',
            'firealarm' => 'required|string|max:255',
            'fireext' => 'required|string|max:255',
            'shield' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'usage' => 'required|string|max:255',
            'ownership' => 'required|string|max:255',
            'organsposition' => 'required|string|max:255',
            'population' => 'required|string|max:255',
            'leaderagent' => 'nullable|string|max:255',
            'governor' => 'nullable|string|max:255',
            'provincecouncil' => 'nullable|string|max:255',
            'commanderarmy' => 'nullable|string|max:255',
            'commanderpolice' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'postalcode' => 'required|string|max:255',
            'phonenumber' => 'required|numeric',
            'mobile' => 'required|numeric',
            'bulidingmaps' => 'nullable|image|mimes:jpg,jpeg,png,bmp|max:20000',
        ]
            ,[
                'bulidingmaps.*.required' => 'لطفا تصویر را آپلو کنید',
                'bulidingmaps.*.mimes' => 'فقط فرمتهای مجاز را آپلود نمایید',
                'bulidingmaps.*.max' => 'حجم فایل نمی تواند بیشتر از 20 مگابایت باشد',
            ]
        );
        $validatedData['bulidingmaps']=$fileNameToStore;
        office::whereId($id)->update($validatedData);

        return redirect('/office')->with('success', 'ویرایش مشخصات با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offices = office::findOrFail($id);
        $offices->delete();

        return redirect('/office')->with('success', 'حذف با موفقیت انجام شد');
    }
}
