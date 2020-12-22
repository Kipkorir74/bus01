@extends('dash')

@section('content')

<div class="content-header">
  <div class="container-fluid">
  <h1 class="h2">update operator {{$operator->operator_id}}</h2>
    </div>

  <form action="/operators/{data}" method="post">
    {{ @csrf_field()}}
     
     <input type="hidden" name="_method" value="put">
    <input type="hidden" name="operator_id" value="{{$operator->operator_id}}">
     
  <div class="form-group">
    <label for="operator_name">Operator name </label>
  <input type="text" id="operator_name" name="operator_name" class="form-control  "  value="{{ $operator->operator_name}}" />
    @if ($errors->has ('operator_name'))
    <span class="help-block">
    <strong>{{$errors->first('operator_name')}}</strong>
    </span>
    
    @endif
  </div>

        <div class="form-group">
            <label for="operator_email">Operator Email Address </Address></label>
            <input type="text" id="operator_email" name="operator_email" class="form-control"  value="{{$operator->operator_email}}"/>

            @if ($errors->has ('operator_email'))
           <span class="help-block">
          <strong>{{$errors->first('operator_email')}}</strong>
           </span>
    
    @endif
        </div>

        <div class="form-group">
            <label for="operator_phone">Operator Phone Number</label>
            <input type="text" placeholder="07********" id="operator_phone" name="operator_phone" class="form-control "  value="{{$operator->operator_phone}}"/>
            @if ($errors->has ('operator_phone'))
            <span class="help-block">
            <strong>{{$errors->first('operator_phone')}}</strong>
            </span>
            
            @endif
          </div>

        <div class="form-group">
            <label for="operator_address">Operator Address</label>
            <input type="text" id="operator_address" name="operator_address" class="form-control "  value="{{$operator->operator_address}}"/>
            @if ($errors->has ('operator_address'))
            <span class="help-block">
            <strong>{{$errors->first('operator_address')}}</strong>
            </span>
            
            @endif
            </div>
            <div class="form-group">
              <label for="status">Active</label>
              <input type="hidden" value="0" name="status" />
              <input type="checkbox" value="1" name="status" />
              </div>
        
            <button type="submit" class="btn btn-primary" >Update</button>
            <a class="btn btn-secondary" href="/operators">Back</a>
            
</form>

   

 
    </div>
  </main>
@endsection