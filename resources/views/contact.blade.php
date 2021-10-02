@extends('Layouts.navbar')

@section('content')

<h1 > Contact Us <h1>
<form action="{{route('contact')}}" method="post">
        
        {{csrf_field()}}

        <div>
            Name:
            <input type="text" name="name" value="{{old('name')}}" >
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

<div>
            Email:
            <input type="text" name="email" value="{{old('email')}}" >
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        </div>  

        <div >
            Phone:
            <input type="text" name="phone" value="{{old('phone')}}" >
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>   

        <div>
           Address:
            <input type="text" name="address" value="{{old('address')}}" >
            @error('address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
        </div>
        
     
        <input type="submit"  value="Submit" >
    </form>
    @endsection