<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buses;
use App\Operator;
class busController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $buses = buses:: paginate(3);
        
        return view('admin.bus.bus_list',compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $opr=Operator::all();
        return view('admin.bus.add_bus',compact('opr'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
     
            'bus_name' => 'required|unique:buses',

            'status' => 'required',
        ]);
        
        $bus=new buses;
     
        $bus->bus_name=$request->input('bus_name');
        $bus->operator_id=$request->input('operator_id');
        $bus->status=$request->input('status');
        $bus->save();

        return redirect()->route('Bus.index')->with('success','bus has been added successfully');

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
