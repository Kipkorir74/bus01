@extends('layouts.app')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
      <div class="btn-toolbar mb-2 mb-md-0">
       
        <a class="btn btn-primary" href="/subregion/create">Add New SubRegion</a>
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            
        </div>
       
        </div>
    </div>



    <h2>Region List</h2>
    
    <div class="table-responsive">
      <table class="table table-bordered table-striped ">
        <thead>
          <tr>
            
            <th>sub region id</th>
            <th>sub region code</th>
            <th>sub region name </th>
            <th>status </th>
            <th>created at </th>
            <th>updated at</th>
            <th> actions</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($sub_region as $sub_regions)
          <tr>
            <td>{{$sub_regions ->sub_region_id}}</td>
            <td>{{$sub_regions ->sub_region_code}}</td>
            <td>{{$sub_regions ->sub_region_name}}</td>
            <td>{{$sub_regions ->status}}</td>
            <td>{{$sub_regions ->created_at}}</td>
            <td>{{$sub_regions ->updated_at}}</td>
            <td><a href="/subregion/{{$sub_regions ->id}}" class="btn btn-primary">update</a></td>
            <td><a href="/subregion/{{$sub_regions ->id}}" class="btn btn-danger">delete</a></td>
            
                
          </tr> 
          @endforeach
          
         
        </tbody>
      </table>
    </div>
  </main>
  
@endsection