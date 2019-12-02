<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\organs;
use App\ghorfeha;
use DB;

class ghorfehaController extends Controller
{
    function __construct()

    {

        $this->middleware('permission:ghorfeha-list|ghorfeha-create|ghorfeha-edit|ghorfeha-delete', ['only' => ['index','show']]);

        $this->middleware('permission:ghorfeha-create', ['only' => ['create','store']]);

        $this->middleware('permission:ghorfeha-edit', ['only' => ['edit','update']]);

        $this->middleware('permission:ghorfeha-delete', ['only' => ['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // dd($request);

        $id=$request->id;
        if(empty($id))
        {
            $ghorfeha = ghorfeha::sortable()->paginate(10);

        }else{
            $ghorfeha = ghorfeha::where('organid',$id)->sortable()->paginate(10);
        }
       return view('ghorfeh.ghorfeha.index', compact('ghorfeha','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ghorfeha=ghorfeha::all();
        $organid=$request->organid;
        $getrites['data']=ghorfeha::getrites();
       // $getactivitytype['data']=ghorfeha::getactivitytype();

        return view('ghorfeh.ghorfeha.create', compact('ghorfeha','organid'))->with("getrites",$getrites);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasfile('ghormasphoto')){

            // Get filename with extension
            $fileameWithExt = $request->file('ghormasphoto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($fileameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('ghormasphoto')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('ghormasphoto')->storeAs('public/image', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $validatedData = $request->validate([
            'organid' => 'nullable|numeric',
            'yearofreq' => 'required|numeric',
            'marchigtype' => 'required|string|max:255',
            'numberghorfeh' => 'required|numeric',
            'meteraj' => 'required|numeric',
            'meterajkol' => 'required|numeric',
            'darbast'=>'nullable|numeric',
            'spacer'=>'nullable|numeric',
            'felezi'=>'nullable|numeric',
            'structuretypetext' => 'nullable|string|max:255',
            'cultural'=>'nullable|numeric',
            'entertainment'=>'nullable|numeric',
            'theraputic'=>'nullable|numeric',
            'sportive'=>'nullable|numeric',
            'news'=>'nullable|numeric',
            'artistic'=>'nullable|numeric',
            'activitytypetext' => 'nullable|string|max:255',
            'ghormasname' => 'required|string|max:255',
            'ghormasfamily' => 'required|string|max:255',
            'ghormasnational' => 'required|numeric',
            'ghormasphone' => 'nullable|numeric',
            'ghormasmobile' => 'required|numeric',
            'specials' => 'nullable|string|max:255',
            'ghormasphoto.*' => 'required|image|mimes:jpg,jpeg,png,bmp|max:20000',


        ]
            ,[
                'ghormasphoto.*.required' => 'لطفا تصویر را آپلو کنید',
                'ghormasphoto.*.mimes' => 'فقط فرمتهای مجاز را آپلود نمایید',
                'ghormasphoto.*.max' => 'حجم فایل نمی تواند بیشتر از 20 مگابایت باشد',
            ]);
        $validatedData['ghormasphoto']=$fileNameToStore;
        $ghorfeha = ghorfeha::create($validatedData);

        return redirect('/ghorfeha')->with('success', 'غرفه افزوده شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ghorfeha $ghorfeha)
    {
        //$ghorfehas = ghorfeha::findOrFail($ghorfeha);
        return view('ghorfeh.ghorfeha.show', compact('ghorfeha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ghorfehas = ghorfeha::findOrFail($id);
        $getrites['data']=ghorfeha::getrites();
       // $getactivitytype['data']=ghorfeha::getactivitytype();
        return view('ghorfeh.ghorfeha.edit', compact('ghorfehas'))->with("getrites",$getrites);
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
        if($request->hasfile('ghormasphoto')){
            // Get filename with extension
            $fileameWithExt = $request->file('ghormasphoto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($fileameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('ghormasphoto')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('ghormasphoto')->storeAs('public/image', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $validatedData = $request->validate([
                'organid' => 'nullable|numeric',
                'yearofreq' => 'required|numeric',
                'marchigtype' => 'required|string|max:255',
                'numberghorfeh' => 'required|numeric',
                'meteraj' => 'required|numeric',
                'meterajkol' => 'required|numeric',
                'darbast'=>'nullable|numeric',
                'spacer'=>'nullable|numeric',
                'felezi'=>'nullable|numeric',
                'structuretypetext' => 'nullable|string|max:255',
                'cultural'=>'nullable|numeric',
                'entertainment'=>'nullable|numeric',
                'theraputic'=>'nullable|numeric',
                'sportive'=>'nullable|numeric',
                'news'=>'nullable|numeric',
                'artistic'=>'nullable|numeric',
                'activitytypetext' => 'nullable|string|max:255',
                'ghormasname' => 'required|string|max:255',
                'ghormasfamily' => 'required|string|max:255',
                'ghormasnational' => 'required|numeric',
                'ghormasphone' => 'nullable|numeric',
                'ghormasmobile' => 'required|numeric',
                'specials' => 'nullable|string|max:255',
                'ghormasphoto.*' => 'required|image|mimes:jpg,jpeg,png,bmp|max:20000',

            ]
            ,[
                'ghormasphoto.*.required' => 'لطفا تصویر را آپلو کنید',
                'ghormasphoto.*.mimes' => 'Only jpeg,png and bmp images are allowed',
                'ghormasphoto.*.max' => 'Sorry! Maximum allowed size for an image is 20MB',
            ]);



        $validatedData['ghormasphoto']=$fileNameToStore;
        ghorfeha::whereId($id)->update($validatedData);

        return redirect('/ghorfeha')->with('success', 'ویرایش مشخصات با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ghorfehas = ghorfeha::findOrFail($id);
        $ghorfehas->delete();

        return redirect('/ghorfeha')->with('success', 'حذف با موفقیت انجام شد');
    }

}
