@extends('layouts.app')

@section('content')

@include('inc.navbar')

<div style="text-align: center; margin:80px">
   
<div style="display: inline-block; background-color:rgba(0,128,128, 0.2);; text-align:center; padding:50px;">
    <h1>HELLO! {{$user->name}}</h1>
    <div style=" padding: 20px; border-bottom: 2px solid;">
        <img src="{{asset('images/'. $user->image)}}" style="width:230px;  border:outset; border-radius:50%"><br>
        <b>Voter ID No.</b>{{$user->voterid}}<br>
             <a href="{{route('inbox.index')}}"><button style="font-size:14px;
                color:black;
                border-radius:8px;
                width:200px;
                padding: 5px 10px;
                transition-duration: 0.7s;
                border: none;
                cursor:pointer;
                text-align:center;
                margin:20px;
                background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">INBOX</button></a>
    </div>

    <div style="padding: 10px; ">
        <h3>Personal Information</h3>
        <div style="padding:10px 80px;"><b>Username: </b>{{$user->name}}<br></div>
        <div style="padding:10px 80px;"><b>Email: </b>{{$user->email}}<br></div>
        <div style="padding:10px 80px;"><b>Gender: </b>{{$user->gender}}<br></div>
        <div style="padding:10px 80px;"><b>Date Of Birth: </b>{{$user->dobirth}}<br></div>
        <div style="padding:10px 80px;"><b>Mobile Number: </b>{{$user->mobile}}<br></div>
        <div style="padding:10px 80px;"><b>Address: </b>{{$user->address}}<br></div>
        <div style="padding:10px 50px;"><b>Joined In: </b>{{$user->created_at}}<br></div>
    </div>

    <a href="{{route('profile.edit', $user->id)}}"><button style="font-size:14px;
        color:black;
        border-radius:8px;
        width:200px;
        padding: 10px 10px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        margin:20px;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Edit Profile Information</button></a>

        @if(Auth::user()->role == 2)
        <a href="{{route('admin.edit', $user->id)}}"><button style="font-size:14px;
            color:black;
            border-radius:8px;
            width:200px;
            padding: 10px 10px;
            transition-duration: 0.7s;
            border: none;
            cursor:pointer;
            text-align:center;
            margin:20px;
            background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Edit Basic Information</button></a><br>
           <form action="{{route('profile.destroy',$user->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button style="font-size:14px;
            color:black;
            border-radius:8px;
            width:200px;
            padding: 10px 10px;
            transition-duration: 0.7s;
            border: none;
            cursor:pointer;
            text-align:center;
            margin:20px;
            background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">DELETE</button>
        </form>
        @endif

</div>
</div>

@include('inc.footer')
@endsection