<?php

namespace App\Http\Controllers;

use App\ghorfehcodegroup;
use DB;
use Illuminate\Http\Request;

class ghorfehcodegroupController extends Controller
{
    function __construct()

    {

        $this->middleware('permission:ghorfehcodegroup-list|ghorfehcodegroup-create|ghorfehcodegroup-edit|ghorfehcodegroup-delete', ['only' => ['index','show']]);

        $this->middleware('permission:ghorfehcodegroup-create', ['only' => ['create','store']]);

        $this->middleware('permission:ghorfehcodegroup-edit', ['only' => ['edit','update']]);

        $this->middleware('permission:ghorfehcodegroup-delete', ['only' => ['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$ghorfehcodegroups = ghorfehcodegroup::all();
        $ghorfehcodegroups = ghorfehcodegroup::latest()->paginate(10);

        return view('ghorfeh.ghorfehgroup.index', compact('ghorfehcodegroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ghorfeh.ghorfehgroup.create');
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
            'group_code' => 'required|numeric',
        ]);
        $ghoefehcodegroup = ghorfehcodegroup::create($validatedData);

        return redirect('/ghorfehgroup')->with('success', 'گروه افزوده شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ghorfehcodegroups = ghorfehcodegroup::findOrFail($id);

        return view('ghorfeh.ghorfehgroup.edit', compact('ghorfehcodegroups'));
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
            'group_code' => 'required|numeric',
        ]);
        ghorfehcodegroup::whereId($id)->update($validatedData);

        return redirect('/ghorfehgroup')->with('success', 'ویرایش مشخصات با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ghorfehcodegroups = ghorfehcodegroup::findOrFail($id);
        $ghorfehcodegroups->delete();

        return redirect('/ghorfehgroup')->with('success', 'حذف با موفقیت انجام شد');
    }

}

