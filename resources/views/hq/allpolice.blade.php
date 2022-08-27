@extends('layouts.app')
@section('content')

@include('inc.navbar')

<div style="background-color:rgba(0,128,128, 0.2); margin:50px; text-align:center;">
    <h1 style="display:block; text-align:center; padding:30px">ALL POLICE LIST</h1><br>
    <h3 style="display:block; text-align:center; padding:10px">TOTAL POLICE REGISTERED: {{$policescount}}</h3><br>
    <div style="text-align: center; display:flex; justify-content:center; margin-bottom:50px;">
    <table class="agenttable" style="border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
        <thead>
            <tr style="background-color: #0fa2ce;
            color: #ffffff;
            text-align: left;">
                <th style="padding: 30px 33px; text-align:center">ID</th>
                <th style="padding: 30px 33px; text-align:center">ROLE</th>
                <th style="padding: 30px 33px; text-align:center">USERNAME</th>
                <th style="padding: 30px 33px; text-align:center">EMAIL</th>
                <th style="padding: 30px 33px; text-align:center">REGISTERED AT</th>
                <th style="padding: 30px 33px; text-align:center">POLICE ID</th>
            </tr>
        </thead>
        <tbody>
        @foreach($polices as $police)
        <tr>
        <td style="padding: 12px 15px; text-align:center">{{$police->id}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$police->role}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$police->name}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$police->email}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$police->created_at}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$police->policeid}}</td>
        <td style="padding: 12px 15px; text-align:center"><a href="{{route('profile.show', $police->id)}}"><button style="font-size:15px;
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
    <div style="padding:15px; background-color:rgba(245, 245, 245, 0.8);">
        {{ 
            $polices->links('vendor.pagination.semantic-ui') 
        }}
        </div> 
</div>

@include('inc.footer') 
@endsection