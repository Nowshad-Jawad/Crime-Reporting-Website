
@extends('layouts.app')

@section('content')


@include('inc.navbar')
<div style=" display: flex;
justify-content:center;
padding:3em;">
    <div style="width:80%;
    box-sizing:border-box;
    border: 1px solid white;
    background-color:rgba(38, 36, 36, 0.4) ; ">
    <h1 style="text-align: center;
    font-size:40;
    color:white;">{{ __('EDIT USER BASIC INFORMATION') }}</h1>
    <form action="{{route('admin.update',$edit->id)}}" method="POST" style="text-align:center;" >
        @csrf
        @method('PUT')
        <label style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">Name</label><br>
        <input type="text" name="name" value="{{$edit->name}}" style=" margin: 3%;
        width:300px;
        height:40px;"><br>
        <label style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">Email</label><br>
        <input type="text" name="email" value="{{$edit->email}}" style=" margin: 3%;
        width:300px;
        height:40px;"><br>
        <label style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">Role ID</label><br>
        <input type="number" name="role" value="{{$edit->role}}" style=" margin: 3%;
        width:300px;
        height:40px;"><br>
        <label for="gender" style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">{{ __('Gender') }}</label><br>
        <select name="gender" style="width:100px; height:30px">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
        </select>
        <br>
        <label for="dobirth" style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">{{ __('Date Of Birth') }}</label><br>
        <input id="dobirth" type="date" name="dobirth" style=" margin: 3%;
        width:300px;
        height:40px;" value="{{$edit->dobirth}}"><br>
        <label for="voterid" style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">{{ __('Voter Id No.') }}</label><br>
        <input id="voterid" type="text" name="voterid" style=" margin: 3%;
        width:300px;
        height:40px;" value="{{$edit->voterid}}"><br>
        <label for="police_id" style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">{{ __('Police Id No.') }}</label><br>
        <input id="policeid" type="text" name="policeid" style=" margin: 3%;
        width:300px;
        height:40px;" value="{{$edit->policeid}}"><br>
        <button style="font-size:20px;
        color:black;
        border-radius:8px;
        padding: 10px 80px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        margin:40px;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Update</button>
    </form>
    </div>
</div>
@include('inc.footer')
@endsection
