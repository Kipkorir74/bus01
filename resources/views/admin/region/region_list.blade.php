@extends('layouts.app')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
      <div class="btn-toolbar mb-2 mb-md-0">
       
        <a class="btn btn-primary" href="/region/create">Add New Region</a>
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            
        </div>
      

        </div>
    </div>

    @include('layouts.partials._alerts')
    

    <h2>Region List</h2>
    
    <div class="table-responsive">
      <table class="table table-bordered table-striped ">
        <thead>
          <tr>
            
            <th>region id</th>
            <th>region code</th>
            <th>region_name </th>
            <th>status </th>
            <th>created at </th>
            <th>updated at</th>
            <th> action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($region as $regions)
          <tr>
            <td>{{$regions ->region_id}}</td>
            <td>{{$regions ->region_code}}</td>
            <td>{{$regions ->region_name}}</td>
            <td>{{$regions ->status}}</td>
            <td>{{$regions ->created_at}}</td>
            <td>{{$regions ->updated_at}}</td>
            <td><a href="/region/{{$regions ->id}}" class="btn btn-primary">update</a></td>
            <td><a href="/region/{{$regions ->id}}" class="btn btn-danger">delete</a></td>
            
                
          </tr> 
          @endforeach
          
         
        </tbody>
      </table>
    </div>
  </main>
  
@endsection