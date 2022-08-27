@extends('layouts.app')

@section('content')

@include('inc.navbar')
<div style="text-align:center; background-color:rgba(245, 245, 245, 0.7); padding:25px 25px; margin:30px 30px">
    <h1>EDIT PROFILE INFORMATION</h1>
    <form action="{{route('profile.update', $user->id)}}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="image" style="margin-left:100px">Upload New Profile Photo:</label>
        <input type="file" name="image" style="margin:30px" notrequired><br>
        <div style="margin:20px">
        <label for="mobile" >MOBILE NO.  </label><br>
        <input type="text" name="mobile" value="{{$user->mobile}}" style="width:375px; height:50px; text-align:center; border:inset"><br>
        </div>
        <div style="margin:20px">
        <label for="address" style="margin-top:50px">ADDRESS  </label><br>
        <input type="text" name="address" value="{{$user->address}}" style="width:375px;height:50px; text-align:center; border:inset"><br>
        </div>
        <button type="submit" style="font-size:20px;
        color:black;
        border-radius:8px;
        padding: 10px 80px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        margin:20px;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">UPDATE</button><br>
</div>
    </form>
    
@include('inc.footer')
@endsection
