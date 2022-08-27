@extends('layouts.app')
@section('content')

@include('inc.navbar')


<div style="text-align:center; background-color:rgba(245, 245, 245, 0.7); padding:25px 25px; margin:30px 30px">
    <h1>SEND MESSAGE</h1>
    <div style=" background-color:rgba(0,128,128, 0.2);padding:50px">
    <form action="{{route('contact.store')}}" method="POST" >
        @csrf
        <b><label>RECIPIENT</label></b><br>
        <input type="email" name="recipient" style="width:400px; height:30px; text-align:center; margin:20px; border:inset"><br>
        <b><label>SUBJECT</label></b><br>
        <input type="text" name="name" style="width:400px; height:30px; text-align:center; margin:20px; border:inset"><br>
        <b><label>MESSAGE</label></b><br>
        <textarea name="message" style="width:400px; height:200px; text-align:center; margin:20px; border:inset; resize:none" ></textarea><br>
        <button type="submit" style="font-size:14px;
        color:black;
        border-radius:8px;
        width:200px;
        padding: 10px 10px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        margin:20px;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">SEND</button>
    </form>
    </div>
</div>


  @include('inc.footer')  
@endsection