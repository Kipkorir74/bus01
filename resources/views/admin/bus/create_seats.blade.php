@extends('dash')

@section('content')
@if(count($errors)>0)
    <ul>
      @foreach($errors->all() as $error)
      <li class="alert alert-danger" role="alert">
        {{$error}}
      </li>
      @endforeach
    </ul>
@endif
<form action="{{route('seats.store')}}" method="post">
    {{ @csrf_field()}}

            <div class="form-group">
                <label for="bus_name">Seat Name</label>
                <input type="text" id="name" name="name" class="form-control {{ $errors->has('seat_name') ? 'is-invalid' :''}}"/>
            </div> 
        
            <button type="submit" class="btn btn-primary" href="">ADD</button>
            <a class="btn btn-secondary" href="/seats">Back</a>
        </form>
        </div>
      </div>
    </div>
  </div>
  @endsection