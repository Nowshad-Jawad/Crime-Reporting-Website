
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
    color:white;">{{ __('GIVE UPDATE') }}</h1>
    <form action="{{route('crime.update',$edit->c_id)}}" method="POST" style="text-align:center;" >
        @csrf
        @method('PUT')
        <input type="hidden" name="c_id" value="{{$edit->c_id}}">
        <input type="hidden" name="report_by" value="{{$edit->report_by}}">
        <input type="hidden" name="c_type" value="{{$edit->c_type}}">
        <input type="hidden" name="c_loc" value="{{$edit->c_loc}}">
        <input type="hidden" name="desc" value="{{$edit->desc}}">
        <label style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">Police Status</label><br>
        <input type="text" name="p_status" value="{{$edit->p_status}}" style=" margin: 3%;
        width:300px;
        height:40px;"><br>
        <label style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">Police Infomation</label><br>
        <input type="text" name="p_info" value="{{$edit->p_info}}" style=" margin: 3%;
        width:300px;
        height:40px;"><br>
        <label style="display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;">Crime Status</label><br>
        <input type="text" name="c_status" value="{{$edit->c_status}}" style=" margin: 3%;
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
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Update</button>
    </form>
    </div>
</div>
@include('inc.footer')
@endsection