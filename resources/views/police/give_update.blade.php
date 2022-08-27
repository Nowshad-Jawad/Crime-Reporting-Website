
@extends('layouts.app')

@section('content')


@include('inc.navbar')
<div style="text-align:center; background-color:rgba(245, 245, 245, 0.7); padding:25px 25px; margin:30px 30px">
    <form action="{{route('jobs.update',$edit->c_id)}}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" name="c_id" value="{{$edit->c_id}}">
        <input type="hidden" name="report_by" value="{{$edit->report_by}}">
        <input type="hidden" name="c_type" value="{{$edit->c_type}}">
        <input type="hidden" name="c_loc" value="{{$edit->c_loc}}">
        <input type="hidden" name="desc" value="{{$edit->desc}}">
        <input type="hidden" name="p_status" value="{{$edit->p_status}}">
        <input type="hidden" name="p_info" value="{{$edit->p_info}}">
        <div style="margin:20px">
        <label>Crime Status</label><br>
        <input type="text" name="c_status" value="{{$edit->c_status}}" style="width:375px;height:50px; text-align:center; border:inset"><br>
        </div>
        <button style="font-size:20px;
        color:black;
        border-radius:8px;
        padding: 10px 80px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        margin:20px;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Update</button>
    </form>

</div>
@include('inc.footer')
@endsection