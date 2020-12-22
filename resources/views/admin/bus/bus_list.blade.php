@extends('dash')

@section('content')
<div class="content-header">
  <div class="container-fluid">
{{--  <main role="main" class="col-md-6 ml-sm-auto col-lg-8 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">  --}}
        
      <div class="btn-toolbar mb-2 mb-md-0">
       
        <a class="btn btn-primary" href="/buses/create">Add New Bus</a>
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            
        </div>
       
        </div>
        @include('layouts.partials._alerts')
    </div>


    

    <h2>bus details</h2>
    
    <div class="table-responsive">
      <table class="table table-bordered table-striped ">
        <thead>
          <tr>
            <th>Bus ID</th>
            <th>Bus name</th>
            <th>operator ID</th>
            <th>status</th>
            <th>created at</th>
            <th>updated at</th>
            <th>actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($buses as $info)
          <tr>
            <td>{{$info ->bus_id}}</td>
            <td>{{$info ->bus_name}}</td>
            <td>{{$info ->operator_id}}</td>
            <td>{{$info ->status}}</td>
            <td>{{$info ->created_at}}</td>
            <td>{{$info ->updated_at}}</td>
            <td><a href="/buses/{{$info ->id}}" class="btn btn-primary">update</a></td>
            <td><a href="/buses/{{$info ->id}}" class="btn btn-danger">delete</a></td>
        
                
          </tr> 
          @endforeach
          
         
        </tbody>
      </table>
      {{$buses->render()}}
    </div>
  </main>
  </div>
</div>
@endsection