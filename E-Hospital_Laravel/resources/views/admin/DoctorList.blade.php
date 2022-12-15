@extends('layouts.layout3')
@section('content')
<table class="table table-border">
    <tr>
        <th>ID</th>
        <th>Doctor's Name</th>
        <th>Date of Birth</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Speciality</th>
        <th>Hospital's ID</th>
        <th>Hospital's Name</th>
        
        <th colspan="2">Action</th>
    </tr>
    @foreach($docList as $doc)
    <tr>
    <div class="card" style="width: 18rem;">
                <div class="card-body">
                <td>{{$doc->id}}</td><br>
                <td>{{$doc->dname}}</td><br>
                <td>{{$doc->dob}}</td><br>
                <td>{{$doc->email}}</td><br>
                <td>{{$doc->phone}}</td><br>
                <td>{{$doc->speciality}}</td><br>
                <td>{{$doc->hid}}</td><br>
                <td>{{$doc->hname}}</td><br>
                <td>	     
                <td>
                    <a class="btn btn-success" href="/DoctorEdit/{{$doc->id}}">Edit</a>
                </td>
                <td>
                 <a class="btn btn-success" href="/DoctorDelete/{{$doc->id}}">Delete</a>
                </td> 
                </div>
    </div>

    </tr>
    @endforeach
</table>
@endsection

