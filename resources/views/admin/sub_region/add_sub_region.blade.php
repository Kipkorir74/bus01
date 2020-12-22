@extends('layouts.app')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2"></h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <a class="btn btn-primary" href="/subregion/create">Add New Sub Region</a>

        
      </div>
    </div>
    
    <h2>SubRegions</h2>
  <form action="{{route('subregion.store')}}" method="post">
    {{ @csrf_field()}}

       <div class="form-group">
        <label for="sub_region_code">Sub Region Code</label>
        <input type="text" id="sub_region_code" name="sub_region_code" class="form-control"/>
       </div>

        <div class="form-group">
            <label for="sub_region_name"> Sub Region Name </label>
            <input type="text" id="sub_region_name" name="sub_region_name" class="form-control"/>

        </div>
        <div class="form-group">
          <label for="status">Active</label>
          <input type="hidden" value="0" name="status" />
          <input type="checkbox" value="1" name="status" />
          </div> 

        
        
            <button type="submit" class="btn btn-primary" href="">Add</button>
            <a class="btn btn-secondary" href="/subregion">Back</a>
            
</form>

  
    </div>
  </main>
@endsection