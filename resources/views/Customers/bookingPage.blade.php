@extends('layouts.customerDash')


@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form method="post" action="{{ route('customer.store') }}">
            {{ csrf_field() }}
    <div class="jumbotron container">
      <div class="form-group">
				<label for="customer_name"> Customer Name:</label>
				<input type="text" id="customer_name" name="customer_name" class="form-control {{ $errors->has('customer_name') ? 'is-invalid' :''}}"/>
              </div>

			<div class="form-group">
              <label for="phone_number"> Phone Number:</label>
              <input type="text" id="customer_phone" name="customer_phone" placeholder="07******" class="form-control"/>
            </div>
				
            <div class="form-group">
              <label for="seat_no"> Seat: </label>
              <select name="seat_no" class="form-control" id="available_seats">
                <label for="seat_no">Seat ID </label>
                <option value="0" selected="true" disabled="true">Select seat</option>
                @foreach ($seat as $seat )
              <option value="{{$seat->name}}">{{$seat->name}}</option>
                @endforeach
              </select>
            </div>
            <div>  
            <button type="submit" class="btn btn-primary" onclick="removecolor()" href="">Book</button>
        <script>
         window.onload= function removecolor(){

            var x=document.getElementById("available_seats");
            x.remove(x.selectedIndex);
}
          // window.onload=function(){
          //   var seatSelected=sessionStorage.getItem("seatSelected");
          //   $('#available_seats').val(seatSelected);
          // }
          //   $('#available_seats').change(function()){
          //     var selSeat=$(this).val();
          //     sessionStorage.setItem("seatSelected",selSeat);
          //   }
        </script>          
                   
                    
               
			<button type="submit" class="btn btn-primary" onclick="removecolor()" href="">cancel</button>
			<div>
            </div>
            </div>
          </form>
@endsection