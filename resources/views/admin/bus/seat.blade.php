@extends('dash')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="btn-toolbar mb-2 mb-md-0">
       
            <a class="btn btn-primary" href="/seats/create">Add New Seats</a>
            <div class="card text-white bg-sea mb-3" style="max-width: 18rem;">
                
            </div>
           
            </div>
            @include('layouts.partials._alerts')
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped ">
              <thead>
                <tr>
                  <th>Seat ID</th>
                  <th>Seat name</th>
                  <th>created at</th>
                  <th>updated at</th>
                  <th>actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($seat as $sea)
                <tr>
                  <td>{{$sea ->id}}</td>
                  <td>{{$sea ->name}}</td>
                  <td>{{$sea ->created_at}}</td>
                  <td>{{$sea ->updated_at}}</td>
                  <td><a href="/seats/{{$sea ->id}}" class="btn btn-primary">update</a></td>
                  <td><a href="/seats/{{$sea ->id}}" class="btn btn-danger">delete</a></td>
              
                      
                </tr> 
                @endforeach
                
               
              </tbody>
            </table>  
             {{$seat->render()}}  
            @endsection