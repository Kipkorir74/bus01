<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Bus_Schedule;
use App\Buses;
use App\seats;
use App\customer;
use Yajra\Datatables\Datatables;
class customerController extends Controller
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
    public function index(Request $request)
    {
       $busschedules=Bus_Schedule::all();
     // $busschedules = Bus_Schedule::where('bus_id')->get();
  
   
       
        return view('Customers.Booking.search',compact('busschedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

 
    public function create()
    {   
        $seat=seats::all();
        return view('Customers.bookingPage',compact('seat'));
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
            'customer_name' => 'required',
            'customer_phone' => 'required|unique:customers|regex:/(07)[0-9]{8}/',
            'seat_no' => 'required|unique:customers',
           
        ]);
        $customer=new customer();
       
        $customer->customer_name=$request->input('customer_name');
        $customer->customer_phone=$request->input('customer_phone');
        $customer->seat_no=$request->input('seat_no');
        $customer->user_id=Auth::user()->id;
        $customer->save();

        return redirect() -> route('booking.index')->with('success','booking successful');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Bus_Schedule::find($id);
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

	public function getUsers(Request $request){
      return DataTables::of(Bus_Schedule::query())->make(true);
	
    }
    public function bookingStatus(){
        if(Auth::check()){
               
            $customer = customer::where('user_id',Auth::user()->id)->get();
            //dd($customer);
            return view('Customers.booking_status',['customer'=>$customer]);  
        }
        return view('auth.login');
    }
}
        
 
 