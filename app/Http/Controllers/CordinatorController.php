<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\organs;
use App\cordinator;
use DB;

class CordinatorController extends Controller
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
            $cordinator = cordinator::sortable()->paginate(10);
        }else{
            $cordinator = cordinator::where('organid',$id)->sortable()->paginate(10);
        }

        return view('ghorfeh.coordinator.index', compact('cordinator','id'));
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $organid=$request->organid;
        return view('ghorfeh.coordinator.create', compact('cordinator','organid'));
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
            'organid' => 'nullable|numeric',
            'yearofreq' => 'required|numeric',
            'corname' => 'required|string|max:255',
            'corfamily' => 'required|string|max:255',
            'cornational' => 'required|string|max:255',
            'corphone' => 'required|string|max:255',
            'cormobile' => 'required|string|max:255',
            'corfax' => 'required|string|max:255',



        ]);

        $cordinators = cordinator::create($validatedData);

        return redirect('/cordinator')->with('success', 'ارگان افزوده شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(cordinator $cordinator)
    {
       // $data = cordinator::findOrFail($id);
        return view('ghorfeh.coordinator.show', compact('cordinator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cordinators = cordinator::findOrFail($id);
        return view('ghorfeh.coordinator.edit', compact('cordinators'));

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
            'organid' => 'nullable|max:255',
            'yearofreq' => 'required|numeric',
            'corname' => 'required|string|max:255',
            'corfamily' => 'required|string|max:255',
            'cornational' => 'required|string|max:255',
            'corphone' => 'required|string|max:255',
            'cormobile' => 'required|string|max:255',
            'corfax' => 'required|string|max:255',
        ]);
        cordinator::whereId($id)->update($validatedData);

        return redirect('/cordinator')->with('success', 'ویرایش مشخصات با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cordinators = cordinator::findOrFail($id);
        $cordinators->delete();

        return redirect('/cordinator')->with('success', 'حذف با موفقیت انجام شد');
    }
}
