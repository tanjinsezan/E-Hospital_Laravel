@extends('layouts.layout2')
@section('content')
<h3 style="background-color:plum; text-align:center;">Book Appointment</h3>
<form action="{{route('BookApp')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-md-4 form-group">
        <span>ID</span>
        <input type="text" name="id" value="{{old('id')}}"class="form-control">
        @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Patient ID</span>
        <input type="text" name="pid" value="{{old('pid')}}"class="form-control">
        @error('pid')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Patient Name</span>
        <input type="text" name="pname" value="{{old('pname')}}" class="form-control">
        @error('pname')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Age</span>
        <input type="text" name="age" value="{{old('age')}}"class="form-control">
        @error('age')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Doctor's Name</span>
        <input type="text" name="dname" value="{{old('dname')}}" class="form-control">
        @error('dname')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Doctor's ID</span>
        <input type="text" name="did" value="{{old('did')}}" class="form-control">
        @error('did')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Hospital ID</span>
        <input type="text" name="hid" value="{{old('hid')}}"class="form-control">
        @error('hid')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Hospital Name</span>
        <input type="text" name="hname" value="{{old('hname')}}"class="form-control">
        @error('hname')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Register" >
    <input type="reset" class="btn btn-success" value="clear form" >                  
</form>
@endsection