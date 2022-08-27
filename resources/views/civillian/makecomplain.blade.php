@extends('layouts.app')

@section('content')

@include('inc.navbar')
@if(session()->has('message'))
        {{ session()->get('message') }}
@endif
<div style="text-align:center; background-color:rgba(245, 245, 245, 0.7); padding:25px 25px; margin:30px 200px">
    <h1 style="margin:20px;">Enter Complaint Details</h1>
    <form action="{{route('complain.store')}}" method="POST" >
        @csrf
        <label>Crime Type</label>
        <select name="c_type" style="margin:10px">
            <option value="Robbery">Robbery</option>
            <option value="Violence">Violence</option>
            <option value="Cyber Crime">Cyber Crime</option>
            <option value="Murder">Murder</option>
            <option value="Attemp To Murder">Attempt To Murder</option>
            <option value="Hijack">Hijack</option>
            <option value="Animal Torture">Animal Torture</option>
            <option value="Harassment">Harassment</option>
          </select><br>
        <input type="text" name="c_loc" style="width:400px; height:30px; text-align:center; margin:20px; border:inset;" placeholder="Location of Crime"><br>
        <textarea name="desc" style="width:400px; height:100px; text-align:center; margin:20px; border:inset; resize:none;" placeholder="Details"></textarea><br>
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
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Create</button>
    </form>
</div>
@include('inc.footer')
@endsection