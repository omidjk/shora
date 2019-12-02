<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\rite;

class RiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rite = rite::sortable()->paginate(10);
        return view('ghorfeh.rite.index', compact('rite'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getmarasem['data']=rite::getmarasem();
        return view('ghorfeh.rite.create')->with("getmarasem",$getmarasem);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function editorupload(){

        $imgpath = request()->file('file')->store('uploads', 'public');
        return response()->json(['location' => "/storage/$imgpath"]);

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'ritename' => 'string|max:255',
                'riteyear' => 'numeric',
                'ritehoto1.*' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto2.*' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto3.*' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto4.*' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto5.*' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto6.*' => '|image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto7.*' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto8.*' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'riteroles' => 'nullable',
            ]
            ,[

                '*photo.*.mimes' => 'فقط فرمتهای مجاز را آپلود نمایید',
                '*photo.*.max' => 'حجم فایل نمی تواند بیشتر از 20 مگابایت باشد',
            ]);
        if($request->hasfile('ritehoto1')){
            // Get filename with extension
            $fileameWithExt1 = $request->file('ritehoto1')->getClientOriginalName();
            // Get just filename
            $filename1 = pathinfo($fileameWithExt1, PATHINFO_FILENAME);
            // Get just extension
            $extension1 = $request->file('ritehoto1')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1 = $filename1 . '_' . time() . '.' . $extension1;
            // Upload Image
            $path = $request->file('ritehoto1')->storeAs('public/marasem', $fileNameToStore1);
        }
        if($request->hasfile('ritehoto2')){
            // Get filename with extension
            $fileameWithExt2 = $request->file('ritehoto2')->getClientOriginalName();
            // Get just filename
            $filename2 = pathinfo($fileameWithExt2, PATHINFO_FILENAME);
            // Get just extension
            $extension2 = $request->file('ritehoto2')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2 = $filename2 . '_' . time() . '.' . $extension2;
            // Upload Image
            $path = $request->file('ritehoto2')->storeAs('public/marasem', $fileNameToStore2);
        }
        if($request->hasfile('ritehoto3')){
            // Get filename with extension
            $fileameWithExt3 = $request->file('ritehoto3')->getClientOriginalName();
            // Get just filename
            $filename3 = pathinfo($fileameWithExt3, PATHINFO_FILENAME);
            // Get just extension
            $extension3 = $request->file('ritehoto3')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore3 = $filename3 . '_' . time() . '.' . $extension3;
            // Upload Image
            $path = $request->file('ritehoto3')->storeAs('public/marasem', $fileNameToStore3);
        }
        if($request->hasfile('ritehoto4')){

            // Get filename with extension
            $fileameWithExt4 = $request->file('ritehoto4')->getClientOriginalName();
            // Get just filename
            $filename4 = pathinfo($fileameWithExt4, PATHINFO_FILENAME);
            // Get just extension
            $extension4 = $request->file('ritehoto4')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore4 = $filename4 . '_' . time() . '.' . $extension4;
            // Upload Image
            $path = $request->file('ritehoto4')->storeAs('public/marasem', $fileNameToStore4);
        }
        if($request->hasfile('ritehoto5')){
            // Get filename with extension
            $fileameWithExt5 = $request->file('ritehoto5')->getClientOriginalName();
            // Get just filename
            $filename5 = pathinfo($fileameWithExt5, PATHINFO_FILENAME);
            // Get just extension
            $extension5 = $request->file('ritehoto5')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore5 = $filename5 . '_' . time() . '.' . $extension5;
            // Upload Image
            $path = $request->file('ritehoto5')->storeAs('public/marasem', $fileNameToStore5);
        }
        if($request->hasfile('ritehoto6')){
            // Get filename with extension
            $fileameWithExt6 = $request->file('ritehoto6')->getClientOriginalName();
            // Get just filename
            $filename6 = pathinfo($fileameWithExt6, PATHINFO_FILENAME);
            // Get just extension
            $extension6 = $request->file('ritehoto6')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore6 = $filename6 . '_' . time() . '.' . $extension6;
            // Upload Image
            $path = $request->file('ritehoto6')->storeAs('public/marasem', $fileNameToStore6);
        }
        if($request->hasfile('ritehoto7')){
            // Get filename with extension
            $fileameWithExt7 = $request->file('ritehoto7')->getClientOriginalName();
            // Get just filename
            $filename7 = pathinfo($fileameWithExt7, PATHINFO_FILENAME);
            // Get just extension
            $extension7 = $request->file('ritehoto7')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore7 = $filename7 . '_' . time() . '.' . $extension7;
            // Upload Image
            $path = $request->file('ritehoto7')->storeAs('public/marasem', $fileNameToStore7);
        }
        if($request->hasfile('ritehoto8')){
            // Get filename with extension
            $fileameWithExt8 = $request->file('ritehoto8')->getClientOriginalName();
            // Get just filename
            $filename8 = pathinfo($fileameWithExt8, PATHINFO_FILENAME);
            // Get just extension
            $extension8 = $request->file('ritehoto8')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore8 = $filename8 . '_' . time() . '.' . $extension8;
            // Upload Image
            $path = $request->file('ritehoto8')->storeAs('public/marasem', $fileNameToStore8);
        }

        $validatedData['ritehoto1']=$fileNameToStore1;
        $validatedData['ritehoto2']=$fileNameToStore2;
        $validatedData['ritehoto3']=$fileNameToStore3;
        $validatedData['ritehoto4']=$fileNameToStore4;
        $validatedData['ritehoto5']=$fileNameToStore5;
        $validatedData['ritehoto6']=$fileNameToStore6;
        $validatedData['ritehoto7']=$fileNameToStore7;
        $validatedData['ritehoto8']=$fileNameToStore8;

        $rite = rite::create($validatedData);

        return redirect('/rite')->with('success', 'مراسم ایجاد شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(rite $rite)
    {
        return view('ghorfeh.rite.show', compact('rite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rite = rite::findOrFail($id);
        $getmarasem['data']=rite::getmarasem();
        return view('ghorfeh.rite.edit', compact('rite'))->with("getmarasem",$getmarasem);
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
        if($request->hasfile('ritehoto1')){
                // Get filename with extension
                $fileameWithExt1 = $request->file('ritehoto1')->getClientOriginalName();
                // Get just filename
                $filename1 = pathinfo($fileameWithExt1, PATHINFO_FILENAME);
                // Get just extension
                $extension1 = $request->file('ritehoto1')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore1 = $filename1 . '_' . time() . '.' . $extension1;
                // Upload Image
                $path = $request->file('ritehoto1')->storeAs('public/marasem', $fileNameToStore1);
        }
        if($request->hasfile('ritehoto2')){
            // Get filename with extension
            $fileameWithExt2 = $request->file('ritehoto2')->getClientOriginalName();
            // Get just filename
            $filename2 = pathinfo($fileameWithExt2, PATHINFO_FILENAME);
            // Get just extension
            $extension2 = $request->file('ritehoto2')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2 = $filename2 . '_' . time() . '.' . $extension2;
            // Upload Image
            $path = $request->file('ritehoto2')->storeAs('public/marasem', $fileNameToStore2);
        }
        if($request->hasfile('ritehoto3')){
            // Get filename with extension
            $fileameWithExt3 = $request->file('ritehoto3')->getClientOriginalName();
            // Get just filename
            $filename3 = pathinfo($fileameWithExt3, PATHINFO_FILENAME);
            // Get just extension
            $extension3 = $request->file('ritehoto3')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore3 = $filename3 . '_' . time() . '.' . $extension3;
            // Upload Image
            $path = $request->file('ritehoto3')->storeAs('public/marasem', $fileNameToStore3);
        }
        if($request->hasfile('ritehoto4')){

            // Get filename with extension
            $fileameWithExt4 = $request->file('ritehoto4')->getClientOriginalName();
            // Get just filename
            $filename4 = pathinfo($fileameWithExt4, PATHINFO_FILENAME);
            // Get just extension
            $extension4 = $request->file('ritehoto4')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore4 = $filename4 . '_' . time() . '.' . $extension4;
            // Upload Image
            $path = $request->file('ritehoto4')->storeAs('public/marasem', $fileNameToStore4);
        }
        if($request->hasfile('ritehoto5')){
            // Get filename with extension
            $fileameWithExt5 = $request->file('ritehoto5')->getClientOriginalName();
            // Get just filename
            $filename5 = pathinfo($fileameWithExt5, PATHINFO_FILENAME);
            // Get just extension
            $extension5 = $request->file('ritehoto5')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore5 = $filename5 . '_' . time() . '.' . $extension5;
            // Upload Image
            $path = $request->file('ritehoto5')->storeAs('public/marasem', $fileNameToStore5);
        }
        if($request->hasfile('ritehoto6')){
            // Get filename with extension
            $fileameWithExt6 = $request->file('ritehoto6')->getClientOriginalName();
            // Get just filename
            $filename6 = pathinfo($fileameWithExt6, PATHINFO_FILENAME);
            // Get just extension
            $extension6 = $request->file('ritehoto6')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore6 = $filename6 . '_' . time() . '.' . $extension6;
            // Upload Image
            $path = $request->file('ritehoto6')->storeAs('public/marasem', $fileNameToStore6);
        }
        if($request->hasfile('ritehoto7')){
            // Get filename with extension
            $fileameWithExt7 = $request->file('ritehoto7')->getClientOriginalName();
            // Get just filename
            $filename7 = pathinfo($fileameWithExt7, PATHINFO_FILENAME);
            // Get just extension
            $extension7 = $request->file('ritehoto7')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore7 = $filename7 . '_' . time() . '.' . $extension7;
            // Upload Image
            $path = $request->file('ritehoto7')->storeAs('public/marasem', $fileNameToStore7);
        }
        if($request->hasfile('ritehoto8')){
            // Get filename with extension
            $fileameWithExt8 = $request->file('ritehoto8')->getClientOriginalName();
            // Get just filename
            $filename8 = pathinfo($fileameWithExt8, PATHINFO_FILENAME);
            // Get just extension
            $extension8 = $request->file('ritehoto8')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore8 = $filename8 . '_' . time() . '.' . $extension8;
            // Upload Image
            $path = $request->file('ritehoto8')->storeAs('public/marasem', $fileNameToStore8);
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }
      
        $validatedData = $request->validate([
                'ritename' => 'required|string|max:255',
                'riteyear' => 'required|numeric',
                'ritehoto1' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto2' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto3' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto4' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto5' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto6' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto7' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'ritehoto8' => 'image|mimes:jpg,jpeg,png,bmp|max:20000',
                'riteroles' => 'nullable',
            ]
            ,[
                'ritehot*.*.required' => 'لطفا تصویر را آپلو کنید',
                'ritehot*.*.mimes' => 'فقط فرمتهای مجاز را آپلود نمایید',
                'ritehot*.*.max' => 'حجم فایل نمی تواند بیشتر از 20 مگابایت باشد',
            ]);
       /* $validatedData['ritehoto1']=$fileNameToStore1;
        $validatedData['ritehoto2']=$fileNameToStore2;
        $validatedData['ritehoto3']=$fileNameToStore3;
        $validatedData['ritehoto4']=$fileNameToStore4;
        $validatedData['ritehoto5']=$fileNameToStore5;
        $validatedData['ritehoto6']=$fileNameToStore6;
        $validatedData['ritehoto7']=$fileNameToStore7;
        $validatedData['ritehoto8']=$fileNameToStore8;*/

        rite::whereId($id)->update($validatedData);
        return redirect('/rite')->with('success', 'ویرایش مشخصات با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rite = rite::findOrFail($id);
        $rite->delete();

        return redirect('/rite')->with('success', 'حذف با موفقیت انجام شد');
    }

}
