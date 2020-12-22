<?php

namespace App\Http\Controllers;
 
 use App\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class bookingController extends Controller
{
    public function index()
    // {
    //     if(Auth::check()){
           
    //         $customer = customer::where('user_id',Auth::user()->id)->get();
    //         return view('Customers.booking_status',['customer'=>$customer]);  
    //     }
    //     return view('auth.login');
    // }

    public function create(){
       
    }

    public function store(Request $request){

    }

  
}
