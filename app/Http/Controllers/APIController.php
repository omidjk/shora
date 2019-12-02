<?php

namespace App\Http\Controllers;


use App\Country;
use App\State;
use Illuminate\Http\Request;


class APIController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function getprovince()

    {

        $data = province::get();

   

        return response()->json($data);

    }

   

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function getcity(Request $request)

    {

        $data = city::where('pname', $request->pname)->get();

   

        return response()->json($data);

    }

}