@extends('layouts.layout2')
@section('content')
<table class="table table-border">
    <tr>
        <th>ID</th>
        <th>Patients ID</th>
        <th>Patient's Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Doctor's Name</th>
        <th>Doctor's ID</th>
        <th>Hospital's ID</th>
        <th>Hospital's Name</th>
        
        <th colspan="1">Action</th>
    </tr>
    @foreach($appList as $ap)
    <tr>
    <div class="card" style="width: 18rem;">
                <div class="card-body">
                <td>{{$ap->id}}</td><br>
                <td>{{$ap->pid}}</td><br>
                <td>{{$ap->pname}}</td><br>
                <td>{{$ap->age}}</td><br>
                <td>{{$ap->phone}}</td><br>
                <td>{{$ap->dname}}</td><br>
                <td>{{$ap->did}}</td><br>
                <td>{{$ap->hid}}</td><br>
                <td>{{$ap->hname}}</td><br>
                <td>	     
                
                <td>
                 <a class="btn btn-success" href="/AppDelete/{{$ap->id}}">Delete</a>
                </td> 
                </div>
    </div>

    </tr>
    @endforeach
</table>
@endsection

