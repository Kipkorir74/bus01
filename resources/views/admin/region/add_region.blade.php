@extends('layouts.app')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2"></h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <a class="btn btn-primary" href="/region/create">Add New Region</a>
        
      </div>
    </div>
    
    <h2>Regions</h2>
  <form action="{{route('region.store')}}" method="post">
    {{ @csrf_field()}}

    <div class="form-group">
        <label for="region_code">Region Code</label>
        <input type="text" id="region_code" name="region_code" class="form-control {{ $errors->has('region_name') ? 'is-invalid' :''}}"/>
       
      </div>
      


        <div class="form-group">
            <label for="region_name">Region Name </label>
            <input type="text" id="region_name" name="region_name" class="form-control {{ $errors->has('region_name') ? 'is-invalid' :''}} "/>
           
          </div>

        <div class="form-group">
          <label for="status">Active</label>
          <input type="hidden" value="0" name="status" />
          <input type="checkbox" value="1" name="status" />

          </div>
        
        
            <button type="submit" class="btn btn-primary" href="">Add</button>
            <a class="btn btn-secondary" href="/region">Back</a>
            
</form>

  
    </div>
  </main>
@endsection