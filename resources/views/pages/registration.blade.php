@extends('layouts.navbar')
@section('content')
<h1>Create your account</h1>
    <form action="{{route('registration')}}" method="post">
        
        {{csrf_field()}}

        <div>
            <span>First Name:</span>
            <input type="text" name="fname" value="{{old('fname')}}" >
            @error('fname')
                <span >{{$message}}</span>
            @enderror
        </div>

        <div>
            <span>Last Name:</span>
            <input type="text" name="lname" value="{{old('lname')}}" >
            @error('lname')
                <span >{{$message}}</span>
            @enderror
        </div>
        
        <div>
            <span>Date of Birth:</span>
            <input type="date" name="dob" value="{{old('dob')}}" >
            @error('dob')
                <span >{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Email:</span>
            <input type="text" name="email" value="{{old('email')}}" >
            @error('email')
                <span >{{$message}}</span>
            @enderror
        </div>
        <div >
            <span>Phone:</span>
            <input type="text" name="phone" value="{{old('phone')}}" >
            @error('phone')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div >
        <span>Password:</span>
            <input type="password" name="password" value="{{old('password')}}" >
              </div>
              @error('password')
                      <span >{{$message}}</span>
                    @enderror
</div>
<div >
        <span>Address:</span>
            <input type="text" name="address" value="{{old('address')}}" >
              </div>
              @error('address')
                      <span >{{$message}}</span>
                    @enderror
</div>
        <input type="submit"  value="Register" >
    </form>
@endsection 