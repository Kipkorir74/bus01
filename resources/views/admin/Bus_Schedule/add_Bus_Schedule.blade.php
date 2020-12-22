@extends('dash')


@section('content')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
    <script src="{{asset('js/jquery.js')}}"></script>
    
<div class="content-header">
  <div class="container-fluid">   
      <div class="btn-toolbar mb-2 mb-md-0">
        <a class="btn btn-primary" href="/busschedule/create">Add New Bus  Schedule</a>
      </div>
    </div>

<h2>Bus Schedules</h2>
  <form action="{{route('busschedule.store')}}" method="post">
    {{ @csrf_field()}}
    <fieldset>
    
      <div class="container">
       @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="form-group">
  <label for="pickup_address"> Operator </label>
  <select name="operator_id"  id="operator" class="form-control">
    <label for="operator_id">operator id </label>
    <option value="0" selected="true" disabled="true">Select operator</option>
    @foreach ($operators as $data )
  <option value="{{$data->operator_id}}">{{$data->operator_name}}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
    <label for="pickup_address"> Bus </label>
    <select name="bus_name" id="bus" class="form-control" >
      <option value="0" disable="true" selected="true">*****select bus bwoy******</option>
  </select>
</div>

<script>
$(document).ready(function(){
  $('Select[name="operator_id" ]').on('change',function(){
    var operator_id=$(this).val();

    if(operator_id){
      
      $.ajax({

        url:'/busschedule/fetch/'+ operator_id,
        type:'GET',
        dataType:'json',
        success:function(data){
          console.log(data);
          $('Select[name="bus_name" ]').empty();
          $.each(data,function(key,value){
            console.log(value.bus_name);
            $('Select[name="bus_name" ]')
            .append('<option value="'+ value.bus_name +'">'+value.bus_name+'</option>');

          })

        }

     });
    
    }
    else{
      $('Select[name="bus_name" ]').empty();
    }

  });
});

</script>

    

    <div class="form-group"> 
         <label for="region_id"> Pick up location </label>
        <select required name="region_id" class="form-control">
          <option value ="0" selected ="true" disabled="true" style="color: silver !important;" value=""> Select Pickup point</option>
                                                      <option value="City Cabanas">City Cabanas</option>
                                                      <option value="Eastleigh">Eastleigh</option>
                                                      <option value="Imara Daima">Imara Daima</option>
                                                      <option value="Machakos Junction">Machakos Junction</option>
                                                      <option value="Mlolongo">Mlolongo</option>
                                                      <option value="Mombasa">Mombasa</option>
                                                      <option value="Mtito-Andei">Mtito-Andei</option>
                                                      <option value="Mtwapa">Mtwapa</option>
                                                      <option value="Nairobi">Nairobi</option>
                                                      <option value="Voi">Voi</option>
                                                      <option value="Ahero">Ahero</option>
                                                      <option value="Amagoro">Amagoro</option>
                                                      <option value="Bishop Muge">Bishop Muge</option>
                                                      <option value="Bukembe">Bukembe</option>
                                                      <option value="Bungoma">Bungoma</option>
                                                      <option value="Burnt forest">Burnt forest</option>
                                                      <option value="Buyofu">Buyofu</option>
                                                      <option value="Chavakali">Chavakali</option>
                                                      <option value="Cheptais">Cheptais</option>
                                                      <option value="Chesikaki">Chesikaki</option>
                                                      <option value="Chimoi">Chimoi</option>
                                                      <option value="Eldoret">Eldoret</option>
                                                      <option value="Esidende">Esidende</option>
                                                      <option value="Gatua">Gatua</option>
                                                      <option value="Gilgil">Gilgil</option>
                                                      <option value="Gjinja">Gjinja</option>
                                                      <option value="Jua kali">Jua kali</option>
                                                      <option value="Kabirengo">Kabirengo</option>
                                                      <option value="Kakamega">Kakamega</option>
                                                      <option value="Kamkuywa">Kamkuywa</option>
                                                      <option value="Kampala">Kampala</option>
                                                      <option value="Kanduyi">Kanduyi</option>
                                                      <option value="Kangemi">Kangemi</option>
                                                      <option value="Kapelengo">Kapelengo</option>
                                                      <option value="Kapenguria">Kapenguria</option>
                                                      <option value="Kapsabet">Kapsabet</option>
                                                      <option value="Kericho">Kericho</option>
                                                      <option value="Kibabii">Kibabii</option>
                                                      <option value="Kimaiti">Kimaiti</option>
                                                      <option value="Kimwanga">Kimwanga</option>
                                                      <option value="Kipkaren">Kipkaren</option>
                                                      <option value="Kisoko">Kisoko</option>
                                                      <option value="Kisumu">Kisumu</option>
                                                      <option value="Kitale">Kitale</option>
                                                      <option value="Kocholia">Kocholia</option>
                                                      <option value="Korosiandet">Korosiandet</option>
                                                      <option value="Koteko">Koteko</option>
                                                      <option value="Koyonzo">Koyonzo</option>
                                                      <option value="Kwa muthoni">Kwa muthoni</option>
                                                      <option value="Lessus">Lessus</option>
                                                      <option value="Lugulu">Lugulu</option>
                                                      <option value="Lunga'nyiro">Lunga'nyiro</option>
                                                      <option value="Lwandanyi">Lwandanyi</option>
                                                      <option value="Lwandeti">Lwandeti</option>
                                                      <option value="Madrid">Madrid</option>
                                                      <option value="Mailisaba">Mailisaba</option>
                                                      <option value="Main Office">Main Office</option>
                                                      <option value="Majengo">Majengo</option>
                                                      <option value="Makunga">Makunga</option>
                                                      <option value="Malaba">Malaba</option>
                                                      <option value="Manyanja">Manyanja</option>
                                                      <option value="Matisi">Matisi</option>
                                                      <option value="Matunda">Matunda</option>
                                                      <option value="Mayanja">Mayanja</option>
                                                      <option value="Mbale">Mbale</option>
                                                      <option value="Misikhu">Misikhu</option>
                                                      <option value="Moisbridge">Moisbridge</option>
                                                      <option value="Mudeto">Mudeto</option>
                                                      <option value="Mumias">Mumias</option>
                                                      <option value="Mungati">Mungati</option>
                                                      <option value="Naivasha">Naivasha</option>
                                                      <option value="Nakuru">Nakuru</option>
                                                      <option value="Nambale">Nambale</option>
                                                      <option value="Namisi">Namisi</option>
                                                      <option value="Namwela">Namwela</option>
                                                      <option value="Nangili">Nangili</option>
                                                      <option value="Ostrich">Ostrich</option>
                                                      <option value="OTC OFFICE">OTC OFFICE</option>
                                                      <option value="Shamakhokho">Shamakhokho</option>
                                                      <option value="Shianda">Shianda</option>
                                                      <option value="Sirende">Sirende</option>
                                                      <option value="Sirisia">Sirisia</option>
                                                      <option value="Siyenga">Siyenga</option>
                                                      <option value="Soy">Soy</option>
                                                      <option value="Teremi">Teremi</option>
                                                      <option value="Timboroa">Timboroa</option>
                                                      <option value="Tororo">Tororo</option>
                                                      <option value="Total">Total</option>
                                                      <option value="Tulienge">Tulienge</option>
                                                      <option value="Turbo">Turbo</option>
                                                      <option value="Uthiru">Uthiru</option>
                                                      <option value="Village Inn">Village Inn</option>
                                                      <option value="Wamono">Wamono</option>
                                                      <option value="Webuye">Webuye</option>
                                                      <option value="Westlands">Westlands</option>
                                                      <option value="Z">Z</option>
                                                      <option value="Arusha">Arusha</option>
                                                      <option value="Bella Luna on Phillips Road">Bella Luna on Phillips Road</option>
                                                      <option value="JKIA @ Paul's cafe">JKIA @ Paul's cafe</option>
                                                      <option value="Moshi">Moshi</option>
                                                      <option value="Parkside hotel">Parkside hotel</option>
                                                      <option value="YWCA">YWCA</option>
                                              </select>

      </select>
    </div>

    <div class="form-group">
        <label for="sub_region_id">Drop off Location </label>
        <select required name="sub_region_id" class="form-control">
          <option value ="0" selected ="true" disabled="true" style="color: silver !important;" value=""> Destination</option>
                                                      <option value="City Cabanas">City Cabanas</option>
                                                      <option value="Eastleigh">Eastleigh</option>
                                                      <option value="Imara Daima">Imara Daima</option>
                                                      <option value="Machakos Junction">Machakos Junction</option>
                                                      <option value="Mlolongo">Mlolongo</option>
                                                      <option value="Mombasa">Mombasa</option>
                                                      <option value="Mtito-Andei">Mtito-Andei</option>
                                                      <option value="Mtwapa">Mtwapa</option>
                                                      <option value="Nairobi">Nairobi</option>
                                                      <option value="Voi">Voi</option>
                                                      <option value="Ahero">Ahero</option>
                                                      <option value="Amagoro">Amagoro</option>
                                                      <option value="Bishop Muge">Bishop Muge</option>
                                                      <option value="Bukembe">Bukembe</option>
                                                      <option value="Bungoma">Bungoma</option>
                                                      <option value="Burnt forest">Burnt forest</option>
                                                      <option value="Buyofu">Buyofu</option>
                                                      <option value="Chavakali">Chavakali</option>
                                                      <option value="Cheptais">Cheptais</option>
                                                      <option value="Chesikaki">Chesikaki</option>
                                                      <option value="Chimoi">Chimoi</option>
                                                      <option value="Eldoret">Eldoret</option>
                                                      <option value="Esidende">Esidende</option>
                                                      <option value="Gatua">Gatua</option>
                                                      <option value="Gilgil">Gilgil</option>
                                                      <option value="Gjinja">Gjinja</option>
                                                      <option value="Jua kali">Jua kali</option>
                                                      <option value="Kabirengo">Kabirengo</option>
                                                      <option value="Kakamega">Kakamega</option>
                                                      <option value="Kamkuywa">Kamkuywa</option>
                                                      <option value="Kampala">Kampala</option>
                                                      <option value="Kanduyi">Kanduyi</option>
                                                      <option value="Kangemi">Kangemi</option>
                                                      <option value="Kapelengo">Kapelengo</option>
                                                      <option value="Kapenguria">Kapenguria</option>
                                                      <option value="Kapsabet">Kapsabet</option>
                                                      <option value="Kericho">Kericho</option>
                                                      <option value="Kibabii">Kibabii</option>
                                                      <option value="Kimaiti">Kimaiti</option>
                                                      <option value="Kimwanga">Kimwanga</option>
                                                      <option value="Kipkaren">Kipkaren</option>
                                                      <option value="Kisoko">Kisoko</option>
                                                      <option value="Kisumu">Kisumu</option>
                                                      <option value="Kitale">Kitale</option>
                                                      <option value="Kocholia">Kocholia</option>
                                                      <option value="Korosiandet">Korosiandet</option>
                                                      <option value="Koteko">Koteko</option>
                                                      <option value="Koyonzo">Koyonzo</option>
                                                      <option value="Kwa muthoni">Kwa muthoni</option>
                                                      <option value="Lessus">Lessus</option>
                                                      <option value="Lugulu">Lugulu</option>
                                                      <option value="Lunga'nyiro">Lunga'nyiro</option>
                                                      <option value="Lwandanyi">Lwandanyi</option>
                                                      <option value="Lwandeti">Lwandeti</option>
                                                      <option value="Madrid">Madrid</option>
                                                      <option value="Mailisaba">Mailisaba</option>
                                                      <option value="Main Office">Main Office</option>
                                                      <option value="Majengo">Majengo</option>
                                                      <option value="Makunga">Makunga</option>
                                                      <option value="Malaba">Malaba</option>
                                                      <option value="Manyanja">Manyanja</option>
                                                      <option value="Matisi">Matisi</option>
                                                      <option value="Matunda">Matunda</option>
                                                      <option value="Mayanja">Mayanja</option>
                                                      <option value="Mbale">Mbale</option>
                                                      <option value="Misikhu">Misikhu</option>
                                                      <option value="Moisbridge">Moisbridge</option>
                                                      <option value="Mudeto">Mudeto</option>
                                                      <option value="Mumias">Mumias</option>
                                                      <option value="Mungati">Mungati</option>
                                                      <option value="Naivasha">Naivasha</option>
                                                      <option value="Nakuru">Nakuru</option>
                                                      <option value="Nambale">Nambale</option>
                                                      <option value="Namisi">Namisi</option>
                                                      <option value="Namwela">Namwela</option>
                                                      <option value="Nangili">Nangili</option>
                                                      <option value="Ostrich">Ostrich</option>
                                                      <option value="OTC OFFICE">OTC OFFICE</option>
                                                      <option value="Shamakhokho">Shamakhokho</option>
                                                      <option value="Shianda">Shianda</option>
                                                      <option value="Sirende">Sirende</option>
                                                      <option value="Sirisia">Sirisia</option>
                                                      <option value="Siyenga">Siyenga</option>
                                                      <option value="Soy">Soy</option>
                                                      <option value="Teremi">Teremi</option>
                                                      <option value="Timboroa">Timboroa</option>
                                                      <option value="Tororo">Tororo</option>
                                                      <option value="Total">Total</option>
                                                      <option value="Tulienge">Tulienge</option>
                                                      <option value="Turbo">Turbo</option>
                                                      <option value="Uthiru">Uthiru</option>
                                                      <option value="Village Inn">Village Inn</option>
                                                      <option value="Wamono">Wamono</option>
                                                      <option value="Webuye">Webuye</option>
                                                      <option value="Westlands">Westlands</option>
                                                      <option value="Z">Z</option>
                                                      <option value="Arusha">Arusha</option>
                                                      <option value="Bella Luna on Phillips Road">Bella Luna on Phillips Road</option>
                                                      <option value="JKIA @ Paul's cafe">JKIA @ Paul's cafe</option>
                                                      <option value="Moshi">Moshi</option>
                                                      <option value="Parkside hotel">Parkside hotel</option>
                                                      <option value="YWCA">YWCA</option>
                                              </select>

      </select>
    </div>


  
        
      <div class="well">
        <div id="depart_date" class="input-append">
          <label for="depart_date">Departure Date </label>
          <input class="form-control " data-format="MM/dd/yyyy HH:mm:ss PP" type="date" name="depart_date" id="depart_date">
          <span class="add-on">
            <i data-time-icon="icon-time" data-date-icon="icon-calendar">
            </i>
          </span>
        </div>
      </div>
 
      <script type="text/javascript">
        $(function() {
          $('#datetimepicker2').datetimepicker({
            language: 'en',
            pick12HourFormat: true
          });
        });
      </script>
    

    <div class="well">
      <div id="return_date" class="input-append">
        <label for="return_date">Return Date </label>
        <input class="form-control "  data-format="MM/dd/yyyy HH:mm:ss PP" type="date" name="return_date" id="return_date">
        <span class="add-on">
          <i data-time-icon="icon-time" data-date-icon="icon-calendar">
          </i>
        </span></div>

        <div class="well">
          <div id="depart_time" class="input-append">
            <label for="return_time">Departure Time</label>
        <input class="form-control " type="time" id="depart_time" name="depart_time" />
        <span class="add-on">
        <i data-time-icon="icon-time"></i>
        </span>
      </div>

      <div class="well">
        <div id="return_time" class="input-append">
        <label for="return_time">Return Time</label>
        <input class="form-control " type="time" id="return_time" name="return_time" />
        <span class="add-on">
        <i data-time-icon="icon-time"></i>
        </span>
      </div>

      <div class="form-group">
            <label for="status">Active</label>
            <input type="hidden" value="0" name="status" />
            <input type="checkbox" value="1" name="status" />
           
            </div> 

      <div>  
        
            <button type="submit" class="btn btn-primary" href="">Add</button>
            <a class="btn btn-secondary" href="/busschedule">Back</a>
      </div>    
</form>

  
    </div>
  </div>
  </div>
</div>
  @endsection

@section('scripts')


    <script type="text/javasript">
    $(".form_datetime").datetimepicker({
      format:"YY:MM:DD"
    });
    </script>
    <script type="text/javasript">
    $('#return-date').datetimepicker({
      format:"YY:MM:DD"
    });
    $('.datepicker').datepicker();
    </script>

    

@endsection