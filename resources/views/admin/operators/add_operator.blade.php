@extends('dash')

@section('content')

<div class="content-header">
  <div class="container-fluid">
     <h1 class="h2">add operator</h2>
    </div>

     <form action="{{route('operator.store')}}" method="post">
    {{ @csrf_field()}}

    

  <div class="form-group">
    <label for="operator_name">Operator name </label>
    <input type="text" id="operator_name" name="operator_name" class="form-control {{ $errors->has('operator_name') ? 'is-invalid' :''}} "   placeholder="Enter operator name"/>
    @if ($errors->has ('operator_name'))
    <span class="help-block">
    <strong>{{$errors->first('operator_name')}}</strong>
    </span>
    
    @endif
  </div>

        <div class="form-group">
            <label for="operator_email">Operator Email Address </Address></label>
            <input type="text" id="operator_email" name="operator_email" class="form-control {{ $errors->has('operator_email') ? 'is-invalid' :''}}  "  placeholder="Enter email address"/>

            @if ($errors->has ('operator_email'))
           <span class="help-block">
          <strong>{{$errors->first('operator_email')}}</strong>
           </span>
    
    @endif
        </div>

        <div class="form-group">
            <label for="operator_phone">Operator Phone Number</label>
            <input type="text" placeholder="07********" id="operator_phone" name="operator_phone" class="form-control {{ $errors->has('operator_phone') ? 'is-invalid' :''}} "  placeholder="Enter phone number"/>
            @if ($errors->has ('operator_phone'))
            <span class="help-block">
            <strong>{{$errors->first('operator_phone')}}</strong>
            </span>
            
            @endif
          </div>

        <div class="form-group">
            <label for="operator_address">Operator Address</label>
            <input type="text" id="operator_address" name="operator_address" class="form-control {{ $errors->has('operator_address') ? 'is-invalid' :''}}"  placeholder="Enter address"/>
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
        
            <button type="submit" class="btn btn-primary" >Add</button>
            <a class="btn btn-secondary" href="/operators">Back</a>
            
</form>

   

 
    </div>
  </main>
@endsection