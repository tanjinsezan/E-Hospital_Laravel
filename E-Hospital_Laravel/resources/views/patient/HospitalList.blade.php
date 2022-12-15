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
    @foreach($hosList as $h)
    <tr>
    <div class="card" style="width: 18rem;">
                <div class="card-body">
                <td>{{$h->id}}</td><br>
                <td>{{$h->hname}}</td><br>
                <td>{{$h->location}}</td><br>
                <td>{{$h->availablebed}}</td><br>
                <td>{{$h->totalbed}}</td><br>
                <td>{{$h->icu}}</td><br>
                <td>{{$h->ccu}}</td><br>
               
                 
                </div>
    </div>

    </tr>
    @endforeach
</table>
@endsection

