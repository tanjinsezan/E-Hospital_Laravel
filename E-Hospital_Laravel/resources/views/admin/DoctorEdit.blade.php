@extends('layouts.layout3')
@section('content')
<form action="{{route('DoctorEdit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row ">

           <div class="form-group">
                    <span>ID</span>
                    <input type="text" name="id" placeholder="Id"class="form-control">
                    @error('id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
           </div>
           <br>
            <div class="form-group">
                    <span>Doctor's Name</span>
                    <input type="text" name="dname" placeholder="Hotel_Name" class="form-control">
                    @error('dname')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <span>Date of Birth</span>
                    <input type="date" name="dob" placeholder="Date of Birth" class="form-control">
                    @error('dob')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-md-4 form-group">
                   <span>Email</span>
                   <input type="text" name="email" value="{{old('email')}}" class="form-control">
                   @error('email')
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <span>Phone</span>
                    <input type="number" name="phone" Placeholder="Phone"class="form-control">
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <span>Speciality</span>
                    <input type="number" name="speciality" Placeholder="Speciality"class="form-control">
                    @error('speciality')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <span>Hospital ID</span>
                    <input type="number" name="hid" Placeholder="Hospital ID"class="form-control">
                    @error('hid')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <span>Hospital's Name</span>
                    <input type="number" name="hname" Placeholder="Hospital's ID"class="form-control">
                    @error('hname')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>

            </div>
            </div>

        </form>

@endsection