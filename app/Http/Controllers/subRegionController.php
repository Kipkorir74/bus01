<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubRegions;
class subRegionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_region=SubRegions::get();
      

        return view('admin.sub_region.sub_region_list',compact('sub_region'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sub_region.add_sub_region');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $subregion=new SubRegions;
       $subregion->sub_region_code = $request->input('sub_region_code');
       $subregion->sub_region_name = $request->input('sub_region_name');
       $subregion->status = $request->input('status');

       $subregion-> save();
        return redirect() -> route('subregion.index');
        $validatedData = $request->validate([
            'sub_region_code' => 'required',
            'sub_region_name ' => 'required',
            'status' => 'required',
            ]);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
