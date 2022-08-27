@extends('layouts.app')

@section('content')


@include('inc.navbar')

<!-- Crimes -->
<div style="background-color:rgba(0,128,128, 0.2); margin:50px; text-align:center">
    <h1 style="display:block; text-align:center">ALL COMPLAINS MADE BY YOU</h1><br>
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
            <th style="padding: 9px 12px; text-align:center">Crime Id</th>
            <th style="padding: 9px 12px; text-align:center" >Crime Type</th>
            <th style="padding: 9px 12px; text-align:center">Crime Location</th>
            <th style="padding: 9px 12px; text-align:center">Description</th>
            <th style="padding: 9px 12px; text-align:center" >Police Status</th>
            <th style="padding: 9px 12px; text-align:center">Police Info</th>
            <th style="padding: 9px 12px; text-align:center">Crime Status</th>
            <th style="padding: 9px 12px; text-align:center">Register Time</th>
        </tr>
    </thead>
    <tbody>
    @foreach($complains as $complain)
    <tr>
    <td style="padding: 9px 12px; text-align:center">{{$complain->c_id}}</td>
    <td style="padding: 9px 12px; text-align:center">{{$complain->c_type}}</td>
    <td style="padding: 9px 12px; text-align:center">{{$complain->c_loc}}</td>
    <td style="padding: 9px 12px; text-align:center">{{$complain->desc}}</td>
    <td style="padding: 9px 12px; text-align:center">{{$complain->p_status}}</td>
    <td style="padding: 9px 12px; text-align:center">{{$complain->p_info}}</td>
    <td style="padding: 9px 12px; text-align:center">{{$complain->c_status}}</td>
    <td style="padding: 9px 12px; text-align:center">{{$complain->created_at}}</td>

    <td style="padding: 9px 12px; text-align:center"><a href="{{ route('complain.show', $complain->c_id) }}"><button style="font-size:14px;
        color:black;
        border-radius:8px;
        padding: 10px 10px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;

        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Show Updates</button></a></td>
           <td style="padding: 9px 12px; text-align:center"><a href="{{ route('crime.show', $complain->c_id) }}"><button style="font-size:14px;
            color:black;
            border-radius:8px;
            padding: 10px 10px;
            transition-duration: 0.7s;
            border: none;
            cursor:pointer;
            text-align:center;
            background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"> Police Details</button></a></td>
    </tr>
    @endforeach
    </tbody>
</table>
    </div>
    <div style="padding:15px">
    {{ 
        $complains->links('vendor.pagination.semantic-ui') 
    }}
    </div>
    <a href="redirects"><button style="font-size:14px;
        color:black;
        border-radius:8px;
        width:200px;
        padding: 10px 10px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        margin:20px;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Go Back To Dashboard</button></a>
</div>

@include('inc.footer')


@endsection
