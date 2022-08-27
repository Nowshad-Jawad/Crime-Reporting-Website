@extends('layouts.app')


@section('content')
    
   
        @include('inc.navbar')
        <div style=" margin:120px;">
            <h1 style="font-size:80px;
            text-align:center;">REPORT CRIME</h1>
            <h2 style="font-size:50px;
            text-align:center;">Got Any Complaint? Register Now!<i class="fa fa-hand-o-down"></i></h2>
            @if(Auth::guest())
                <a href="{{route('register')}}"><p style=" text-align:center;"><button style="font-size:20px;
                    color:black;
                    border-radius:8px;
                    padding: 30px 40px;
                    transition-duration: 0.7s;
                    border: none;
                    cursor:pointer;
                    text-align:center;
                    background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"><i class="fa fa-user-plus"> Sign Up</i></button></p>
                </a>
            @else
            <a href="{{route('home')}}"><p style=" text-align:center;"><button style="font-size:20px;
                color:black;
                border-radius:8px;
                padding: 30px 40px;
                transition-duration: 0.7s;
                border: none;
                cursor:pointer;
                text-align:center;
                background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"> Dashboard</button></p>
            </a>
            @endif
        </div>  
        
        @include('inc.footer')
@endsection 