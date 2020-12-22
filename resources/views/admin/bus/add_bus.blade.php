@extends('dash')

@section('content')
<div class="content-header">
  <div class="container-fluid">
{{--  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">  --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2"></h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <a class="btn btn-primary" href="/buses/create">Add New Bus</a>
      
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
         
        
      </div>
    </div>

    <h2>Buses</h2>

@if(count($errors)>0)
    <ul>
      @foreach($errors->all() as $error)
      <li class="alert alert-danger" role="alert">
        {{$error}}
      </li>
      @endforeach
    </ul>
@endif

  <form action="{{route('Bus.store')}}" method="post">
    {{ @csrf_field()}}

    <div class="form-group">
        <label for="bus_name">Bus Name</label>
        <input type="text" id="bus_name" name="bus_name" class="form-control {{ $errors->has('bus_name') ? 'is-invalid' :''}}"/>
    
@if ($errors->has ('bus_name'))
<span class="help-block">
<strong>{{$errors->first('bus_name')}}</strong>
</span>

@endif
      </div>   

        <div class="form-group">
            <label for="operator_id">Operator ID</label>

            <select name="operator_id" class="form-control ">
              <label for="bus_id">bus id </label>
              <option value="0" selected="true" disabled="true">Select Operator</option>
              @foreach ($opr as $op )
            <option value="{{$op->operator_id}}">{{$op->operator_name}}</option>
              @endforeach
            </select>

        </div> 


              
            <div class="form-group">
              <label for="status">Active</label>
              <input type="hidden" value="0" name="status" />
              <input type="checkbox" value="1" name="status" />
              </div>
              
            

        
        
            <button type="submit" class="btn btn-primary" href="">Add</button>
            <a class="btn btn-secondary" href="/buses">Back</a>
            
</form>

  
    </div>
</div>
</div>

@endsection