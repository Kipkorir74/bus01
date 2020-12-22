    @extends('layouts.customerDash')

    <head> 
        <title>Bus search</title>
    </head>
@section('content')
{{ @csrf_field()}}
<div class="container"> 
  <div class="content-header">
    <div class="container-fluid">   
        <div class="btn-toolbar mb-2 mb-md-0">
        <form action="{{ route('customer.index')}}" method="post" class="form-inline">
      
        </div>  


</div> 
    
                 <div class="table-responsive">
                     <table class="table table-bordered table-striped" id="myTable">
        <thead>
          <tr>
            <th>Schedule ID</th>
            <th>Bus Name</th>
            <th>operator Name</th>
            <th>Pick up address</th>
            <th>dropoff address</th>
            <th>Departure Date</th>
            <th>Return Date</th>
            <th>Departure Time</th>
            <th>Return Time</th>
          
            <th>Status</th>
            <th>created at</th>

            <th>action</th>
          </tr>
        </thead>
        <tbody id="myTable">
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
    
            <td><a href="/book/{{$bschedule->id}}" class="btn btn-primary">Book</a></td>
        
          </tr> 
          
          @endforeach
        
        </tbody>
      </table>


    </div>
    </div>
  </main>
        </div>
    </div>
  </div>
        </div>
    </div>
    <script>
      $(document).ready( function () {
      $('#myTable').DataTable({
        processing: true,
        serverSide: true,

        ajax:'{!! route('customer.index')!!}',
        columns:[
          { data:'schedule_id',  name:'schedule_id' },
          { data:'bus_id',  name:'bus_id' },
          { data:'operator_id',  name:'operator_id' },
          { data:'region_id',  name:'region_id' },
          { data:'sub_region_id',  name:'sub_region_id' },
          { data:'depart_date',  name:'depart_date' },
          { data:'return_date',  name:'return_date' },
          { data:'depart_time',  name:'depart_time' },
          { data:'return_time',  name:'return_time' },
          { data:'status',  name:'status' },
          { data:'created_at',  name:'created_at' },
        ]
      });
    } );
    </script>
@endsection