@extends('layouts.layout3')
@section('content')
<h3 style="background-color:plum; text-align:center;">Insert New Hospital</h3>
<form action="{{route('hosCreate')}}" class="form-group" method="post">
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
        <span>Name</span>
        <input type="text" name="hname" value="{{old('hname')}}" class="form-control">
        @error('hname')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Location</span>
        <input type="text" name="location" value="{{old('location')}}"class="form-control">
        @error('location')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Beds Available</span>
        <input type="text" name="availablebed" value="{{old('availablebed')}}" class="form-control">
        @error('availablebed')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Total Beds</span>
        <input type="text" name="totalbed" value="{{old('totalbed')}}" class="form-control">
        @error('totalbed')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
    <div class="col-md-4 form-group">
        <span>ICU Facility</span>
        <input type="text" name="icu" value="{{old('icu')}}" class="form-control">
        @error('icu')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>ccu facility</span>
        <input type="text" name="ccu" value="{{old('ccu')}}"class="form-control">
        @error('ccu')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Register" >
    <input type="reset" class="btn btn-success" value="clear form" >                  
</form>
@endsection