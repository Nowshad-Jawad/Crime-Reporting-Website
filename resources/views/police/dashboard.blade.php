@extends('layouts.app')

@section('content')


@include('inc.navbar')


<div style="background-color:rgba(0,128,128, 0.2); margin:50px; text-align:center">
    <h1 style="display:block; text-align:center">LATEST COMPLAINS ASSIGNED TO YOU</h1><br>
    
    
    <div style="text-align: center; display:flex; justify-content:center; margin-bottom:50px;">
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
                <th style="padding: 30px 33px; text-align:center">Complain ID</th>
                <th style="padding: 30px 33px; text-align:center">Reported By</th>
                <th style="padding: 30px 33px; text-align:center">Complain Type</th>
                <th style="padding: 30px 33px; text-align:center">Complain Location</th>
                <th style="padding: 30px 33px; text-align:center">Registered At</th>
            </tr>
        </thead>
        <tbody>
        @foreach($assigns as $assign)
        <tr>
        <td style="padding: 12px 15px; text-align:center">{{$assign->c_id}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$assign->report_by}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$assign->c_type}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$assign->c_loc}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$assign->created_at}}</td>
        <td style="padding: 12px 15px; text-align:center"><a href="{{route('showcomplain.show', $assign->c_id)}}"><button style="font-size:15px;
            color:black;
            border-radius:8px;
            padding: 10px 50px;
            transition-duration: 0.7s;
            border: none;
            cursor:pointer;
            text-align:center;
            margin:20px;
            background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">SHOW DETAILS</button></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
    </div>
    <b style="display:block; text-align:center "><p style="font-size:20px">Total Number Of Complains Assigned: {{$assigncount}}</p></b><br>
    <a href="{{ route('jobs.index') }}"><button style="font-size:20px;
        color:black;
        border-radius:8px;
        padding: 10px 80px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        margin:20px;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Show All Assigned Complains</button></a><br>
        
</div> 

@include('inc.footer')
@endsection



