@extends('layouts.layout2')
@section('content')
<table class="table table-border">
    <tr>
        <th>Hospital's ID</th>
        <th>Hospital's Name</th>
        <th>Location</th>
        <th>Available Bed</th>
        <th>Total bed</th>
        <th>ICU</th>
        <th>CCU</th>
      
    </tr>
    @foreach($location as $l)
    <tr>
    <div class="card" style="width: 18rem;">
                <div class="card-body">
                <td>{{$l->id}}</td><br>
                <td>{{$l->hname}}</td><br>
                <td>{{$l->location}}</td><br>
                <td>{{$l->availablebed}}</td><br>
                <td>{{$l->totalbed}}</td><br>
                <td>{{$l->icu}}</td><br>
                <td>{{$l->ccu}}</td><br>
               
                 
                </div>
    </div>

    </tr>
    @endforeach
</table>
@endsection

