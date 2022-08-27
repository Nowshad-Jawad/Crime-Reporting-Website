
@extends('layouts.app')

@section('content')


@include('inc.navbar')
@if(session()->has('message'))
        {{ session()->get('message') }}
@endif
<div style=" display: flex;
justify-content:center;
padding:3em;">
<div style="width:80%;
box-sizing:border-box;
border: 1px solid white;
background-color:rgba(38, 36, 36, 0.4) ; ">
<h1 style="text-align: center;
font-size:40;
color:white;">{{ __(' CREATE NEW USER') }}</h1>
    <form action="{{route('admin.store')}}" method="POST" style="text-align:center;" >
        @csrf
        <label style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">Name</label><br>
        <input type="text" name="name" style=" margin: 3%;
        width:300px;
        height:40px;"><br>
        <label style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">Email</label><br>
        <input type="text" name="email" style=" margin: 3%;
        width:300px;
        height:40px;"><br>
        <label style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">Role ID</label><br>
        <input type="number" name="role" style=" margin: 3%;
        width:300px;
        height:40px;"><br>
        <label style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">Voter ID</label><br>
        <input type="text" name="voterid" style=" margin: 3%;
        width:300px;
        height:40px;"><br>
        <label style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">Password</label><br>
        <input  type="password" name="password" style=" margin: 3%;
        width:300px;
        height:40px;"><br>
        <label style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">Confirm Password</label><br>
        <input type="password" name="confirm_password" style=" margin: 3%;
        width:300px;
        height:40px;"><br>
        <button style="font-size:20px;
        color:black;
        border-radius:8px;
        padding: 10px 80px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        margin:40px;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Create</button>
    </form>
</div>
</div>
@include('inc.footer')
@endsection