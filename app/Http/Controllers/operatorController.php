<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
class operatorController extends Controller
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
        $operators = operator:: paginate(3);
        
        return view('admin.operators.operator_list',compact('operators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.operators.add_operator');
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
            'operator_name' => 'required|unique:operators',
            'operator_email' => 'required|email|unique:operators',
            'operator_phone' => 'required|regex:/(07)[0-9]{8}/|unique:operators',
            'operator_address' => 'required | unique:operators',
            'status' => 'required',
        ]);
       
        $operator = new operator;
        $operator->operator_name = $request->input('operator_name');
        $operator->operator_email = $request->input('operator_email');
        $operator->operator_phone = $request->input('operator_phone');
        $operator->operator_address = $request->input('operator_address');
        $operator->status = $request->input('status');

      $operator->save();

      return redirect() -> route('operator.index')->with('success','Operator has been added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operator = Operator::where('operator_id',$id)->first();
        return view('admin.operators.show',['operator'=>$operator]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $operator=operator::find($operator->operator_id);

        return view('operators.edit_operator',['operator'=>$operator]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Operator $id)
    {
        // $request->input('operator_name');

        $operator = Operator::where('operator_id',$id)->first();
        $id-> fill($request->input())->save();
        
            
            if($operator){
                return redirect()->route('operator.index')
                ->with('success','operator updated successfully');
    
    
    }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        // $op = Operator::where('opera- vg mtor_id',$id)->get();
        // echo $op->delete();
        $operators = Operator::where('operator_id',$id)->first();
        //  $operators =Operator::where($operator->operator_id);
        //  dd($operators);
         if ($operators != null) {
         $operators->delete();
        return redirect()->route('operator.index')->with ('success','Operator deleted successfully');
         }
   
    return redirect()->route('operator.index')->with(['error', 'Wrong ID!!']);

}
}