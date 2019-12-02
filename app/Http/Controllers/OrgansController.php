<?php

namespace App\Http\Controllers;

use App\organs;
use Illuminate\Http\Request;


class OrgansController extends Controller
{
    function __construct()

    {

        $this->middleware('permission:Organs-list|Organs-create|Organs-edit|Organs-delete', ['only' => ['index','show']]);

        $this->middleware('permission:Organs-create', ['only' => ['create','store']]);

        $this->middleware('permission:Organs-edit', ['only' => ['edit','update']]);

        $this->middleware('permission:Organs-delete', ['only' => ['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organss = organs::sortable()->paginate(10);

        return view('ghorfeh.organs.index', compact('organss'));
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupnamedata['data']=organs::getghorfehgroup();
        $oprovince['data']=organs::oprovince();
       // $selectedid=10;
        return view('ghorfeh.organs.create')->with("groupnamedata",$groupnamedata)->with("oprovince",$oprovince);

    }
    public function city($oprovinceid){

        // Fetch Employees by Departmentid
        $cityData['data'] = organs::city($oprovinceid);

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
        $validatedData = $request->validate([
            'group_name' => 'required|max:255',
            'organ_code' => 'required|numeric',
            'organ_name' => 'required|max:255',
            'province' => 'required|max:255',
            'city' => 'nullable|max:255',
            'organ_address' => 'required|max:255',


        ]);
        $organs = organs::create($validatedData);

        return redirect('/organs')->with('success', 'ارگان افزوده شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organs = organs::findOrFail($id);

        return view('ghorfeh.organs.show', compact('organs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organss = organs::findOrFail($id);
        $groupnamedata['data']=organs::getghorfehgroup();
        $oprovince['data']=organs::oprovince();

        return view('ghorfeh.organs.edit', compact('organss'))->with("groupnamedata",$groupnamedata)->with("oprovince",$oprovince);
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
            'group_name' => 'required|max:255',
            'organ_code' => 'required|numeric',
            'organ_name' => 'required|max:255',
            'province' => 'required|max:255',
            'city' => 'nullable|max:255',
            'organ_address' => 'required|max:255',
        ]);
        organs::whereId($id)->update($validatedData);

        return redirect('/organs')->with('success', 'ویرایش مشخصات با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organss = organs::findOrFail($id);
        $organss->delete();

        return redirect('/organs')->with('success', 'حذف با موفقیت انجام شد');
    }
}
