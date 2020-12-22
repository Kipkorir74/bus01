@extends('dash')


@section('content')

<div class="content-header">
  <div class="container-fluid">   
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="ion ion-clipboard mr-1"></i>
       
      <div class="btn-toolbar mb-2 mb-md-0"> 
       
        <a class="btn btn-primary" href="/busschedule/create">Generate Bus Schedule</a>
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            
        </div>
       
        </div>
    </div>

    <h2>bus details</h2>
    
    <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-striped ">
        <thead>
          <tr>
            <th>Schedule ID</th>
            <th>Bus Name</th>
            <th>operator Name</th>
            <th>Pick Up Location</th>
            <th>Dropoff Location</th>
            <th>Departure Date</th>
            <th>Return Date</th>
            <th>Departure Time</th>
            <th>Return Time</th>
            <th>Status</th>
            <th>created at</th>
            <th>updated at</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($busschedules as $bschedule )
          <tr>
            <td>{{$bschedule ->schedule_id}}</td>
            <td>{{$bschedule ->bus_id}}</td>
            <td>{{$bschedule ->operator_id}}</td>
            <td>{{$bschedule ->region_id}}</td>
            <td>{{$bschedule ->sub_region_id}}</td>
            <td>{{$bschedule ->depart_date}}</td>
            <td>{{$bschedule ->return_date}}</td>
            <td>{{$bschedule ->depart_time}}</td>
            <td>{{$bschedule ->return_time}}</td>
            <td>{{$bschedule ->status}}</td>
            <td>{{$bschedule ->created_at}}</td>
            <td>{{$bschedule ->updated_at}}</td>
            <td><a href="/busschedule/{{$bschedule ->id}}" class="btn btn-primary">update</a></td>
            <td><a href="/busschedule/{{$bschedule ->id}}" class="btn btn-danger">delete</a></td>
          </tr> 
          @endforeach
          
         
        </tbody>
      </table>
      {{$busschedules->render()}}
    </div>
    </div>
    </div>
  </div>
</div>
  
@endsection