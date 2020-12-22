<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Http\Request;
use App\Bus_Schedule;
use App\Buses;
use App\Operator;
use App\Regions;
use App\SubRegions;

class busScheduleController extends Controller
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
        $busschedules=Bus_Schedule::paginate(3);
        
        return view('admin.Bus_Schedule.Bus_Schedule_list',['busschedules'=>$busschedules]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response    
     */

    function fetch( $id)
    {
       
        // $buses= Buses::where('operator_id',$id)
        
    
        $buses = Buses::where('operator_id',$id)
        ->get(['bus_name','operator_id']);
        // ->pluck('bus_name','operator_id');
        // return $buses;
        return json_encode($buses);
    

        // dd($operator);
        // $buses=Buses::where('operator_id', '=', $operator_id)->get();
        // return response()->json($buses);

   

    }

    public function create()

    {
        $busschedules=Bus_Schedule:: all();
        $operators=operator:: all();
        $buses=buses:: all();
        $regions=Regions:: all();
        $sub_region=SubRegions:: all();

       return view ('admin.Bus_Schedule.add_Bus_Schedule',compact('busschedules','operators','buses','regions','sub_region'));
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todayDate = date('d/m/Y');

         $request->validate([
            'bus_id' => 'required',
            'operator_id' => 'required',
            'region_id' => 'required',
            'sub_region_id' => 'required',
            'depart_date' => 'required|after_or_equal:'.$todayDate,
            'return_date' => 'required|after_or_equal:depart_date',
            'depart_time' => 'required|time',
            'return_time' => 'required',
            'depart_time' => 'required|date_format:H:i|before:return_time',
            'status' => 'required',
        ]);

           
        
        $schedule=new Bus_Schedule();
        
        $schedule->operator_id=$request->input('operator_id');
      
        $schedule->bus_id=$request->input('bus_id');
        $schedule->region_id=$request->input('region_id');
        $schedule->sub_region_id=$request->input('sub_region_id');
        $schedule->depart_date=$request->input('depart_date');
        $schedule->return_date=$request->input('return_date');
        $schedule->depart_time=$request->input('depart_time');
        $schedule->return_time=$request->input('return_time');
        $schedule->status=$request->input('status');
         $schedule->save();
        return redirect() -> route('busschedule.index')->with('success','Bus Schedule has been added successfully');


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

    public function showRegion(Request $request){
        if ($request->ajax()){
            return response(buses::where('operator_id', $request->operator_id)->get());
        }
    }
    
        public function showOperator(Request $request){
        if ($request->ajax()){
            return response(SubRegions::where('region_id', $request->region_id)->get());
        }
    
    } 

}
