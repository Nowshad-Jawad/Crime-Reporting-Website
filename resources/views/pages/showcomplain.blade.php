@extends('layouts.app')
@section('content')

@include('inc.navbar')

<div style="text-align: center; background-color:rgba(245, 245, 245, 0.5); margin:50px; padding:50px">

    <h1>Details of Crime Id {{$complain->c_id}}</h1>
    <h3 style="margin=top:5px;">Reported By {{$complain->report_by}}</h3>
    <b>Registered At {{$complain->created_at}}</b>
    <div style="text-align: center; background-color:rgba(245, 245, 245, 0.5); margin:20px 200px; padding:50px">
    <h3 style="margin=top:5px;">DETAILS</h3>
       Location of Crime: {{$complain->c_loc}}<br><br>
       Description: <br>{{$complain->desc}}<br>
    </div>

    <div style="background-color:rgba(0,128,128, 0.2); margin:20px 100px; text-align:center; padding:50px">
        <h1 style="display:block; text-align:center">All Updates Regarding This Complaint</h1><br>
    <div style="text-align: center; display:flex; justify-content:center; margin-bottom:50px; margin:30px; background-color:rgba(245,245,245, 0.8);">
        <table style="border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
            <thead>
                <tr style="background-color: #0fa2ce;
                color: #ffffff;
                text-align: left;">
                    <th style="padding: 12px 15px; text-align:center">Crime Id</th>
                    <th style="padding: 12px 15px; text-align:center">Police Status</th>
                    <th style="padding: 12px 15px; text-align:center">Police Info</th>
                    <th style="padding: 12px 15px; text-align:center">Crime Status</th>
                    <th style="padding: 12px 15px; text-align:center">Last Update Time</th>
                </tr>
            </thead>
            <tbody>
            @foreach($histories as $history)
            <tr>
            <td style="padding: 12px 15px; text-align:center">{{$history->crime_id}}</td>
            <td style="padding: 12px 15px; text-align:center">{{$history->p_status}}</td>
            <td style="padding: 12px 15px; text-align:center">{{$history->p_info}}</td>
            <td style="padding: 12px 15px; text-align:center">{{$history->c_status}}</td>
            <td style="padding: 12px 15px; text-align:center">{{$history->updated_at}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        
    </div>
    </div>
    @if(Auth::user()->role == 0)
    <a href="{{route('complain.index')}}"><button style="font-size:14px;
        color:black;
        border-radius:8px;
        width:200px;
        padding: 10px 10px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        margin:20px;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Show All Complaints</button></a>
        @elseif(Auth::user()->role == 1)

<a href="{{route('jobs.edit', $history->crime_id)}}"><button style="font-size:14px;
    color:black;
    border-radius:8px;
    width:200px;
    padding: 10px 10px;
    transition-duration: 0.7s;
    border: none;
    cursor:pointer;
    text-align:center;
    margin:20px;
    background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Give Update</button></a>

@elseif(Auth::user()->role == 2)


    <a href="{{route('crime.edit', $complain->c_id)}}"><button style="font-size:14px;
        color:black;
        border-radius:8px;
        width:200px;
        padding: 10px 10px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        margin:20px;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">ASSIGN POLICE</button></a>
        @endif
</div>
@include('inc.footer')
@endsection