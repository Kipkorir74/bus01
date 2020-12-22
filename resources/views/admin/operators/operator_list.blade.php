@extends('dash')

@section('content')

<div class="content-header">
  <div class="container-fluid">   
      <div class="btn-toolbar mb-2 mb-md-0">
        

        <a class="btn btn-primary" href="/operators/create">Add New Operator</a>
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            
        </div>
        @include('layouts.partials._alerts')
        </div>
    </div>

    <h2>operator details</h2>
    
    <div class="table-responsive">
      <table class="table table-bordered table-striped ">
        <thead>
          <tr>
           
            <th>operator id</th>
            <th>operator name</th>
            <th>operator email</th>
            <th>operator phone</th>
            <th>operator address</th>
            <th>status</th>
            <th>created at</th>
            <th>updated at</th>
            <th>actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($operators as $data)
          <tr>

         
            <td>{{$data ->operator_id}}</td>
            <td>{{$data ->operator_name}}</td>
            <td>{{$data ->operator_email}}</td>
            <td>{{$data ->operator_phone}}</td>
            <td>{{$data ->operator_address}}</td>
            <td>{{$data ->status}}</td>
            <td>{{$data ->created_at}}</td>
            <td>{{$data ->updated_at}}</td>
            <td><a href={{url('operator/data',$data->operator_id)}} class="btn btn-primary">update</a></td>
            {{-- <td><a href="/operators/delete/{{$data ->operator_id}}" class="btn btn-danger">delete</a></td> --}}
           <td>
            <a href="operators/delete/{{$data ->operator_id}}"
              onclick="
              var result= confirm('Are you sure you want to delete this operator?');
                if(result){
                  event.preventDefault();
                  document.getElementById('delete').submit();

                }
              " class="btn btn-danger">Delete
              </a>
            <form id="delete" action="{{route('operator.destroy',[$data ->operator_id])}}" method="POST"
              style="display: none">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              
            </form>
           </td>     
          </tr> 
          @endforeach
          
         
        </tbody>
      </table>
      {{$operators->render()}}
    </div>
  </div>
</div>
  
@endsection