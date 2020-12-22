@extends('layouts.customerDash')

@section('content')
  <div class="jumbotron container">
      <div>
        <p>Hello {{Auth::user()->name}}</p>
      </div>
      <div>
      <h2 class="display3">Booking status</h2>
      <hr class="my-4">
      </div>
  
  {{-- <div>
  <p>Name:{{$book->customer_name}}</p>
  </div> 

  <div>
    <p>Phone:{{$book->customer_phone}}</p>
  </div>

  <div>
    <p>Seat No:{{$book->seat_no}}</p>
  </div>

  <div>
    <p>Booking Time:{{$book->created_at}}</p>
  </div>
</div>    --}}
<div class="table-responsive">
      <table class="table table-bordered table-striped ">
        <thead>
          <tr>
            <th>customer_name</th>
            <th>customer_phone</th>
            <th>seat_no</th>
            <th>status</th>
            <th>created at</th>
          </tr>
        </thead>
<tbody>
  @foreach ($customer as $book)
<tr>
  <td>{{$book ->customer_name}}</td>
  <td>{{$book ->customer_phone}}</td>
  <td>{{$book ->seat_no}}</td>
  <td>{{$book ->status}}</td>
  <td>{{$book ->created_at}}</td>
  
  
      
</tr>

@endforeach
</tbody>
      </table>
</div>
@endsection