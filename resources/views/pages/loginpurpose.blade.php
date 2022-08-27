@extends('layouts.app')

@section('content')


@include('inc.navbar')


<div style="text-align:center; margin-bottom:80px">
    <h1 style="margin-top: 50px">LOGIN AS</h1>
    <div style="display: inline-flex; justify-content:center; align-items:center; text-align:center;">
        <a href="{{ route('loginpurpose.show', 'civil')}}" style="text-decoration: none; color:black"><div style="margin:40px; border:outset; background-color:rgba(245, 245, 245, 0.5); width:200px; height:100px; padding:50px">
            <img src="{{asset('images/pro.jpg')}}" style="width:100px">
            <h3> CIVILLIAN LOGIN </h3>
        </div></a>
        <a href="{{route('policelogin.index')}}" style="text-decoration: none; color:black"><div style="margin:40px; border:outset; background-color:rgba(245, 245, 245, 0.5); width:200px; height:100px; padding:50px">
            <img src="{{asset('images/policepro.jpg')}}" style="width:100px"> 
            <h3> POLICE LOGIN </h3>
        </div></a>
        <a href="{{ route('loginpurpose.show', 'hq') }}" style="text-decoration: none; color:black"><div style="margin:40px; border:outset; background-color:rgba(245, 245, 245, 0.5); width:200px; height:100px; padding:50px">
            <img src="{{asset('images/hqpro.jpg')}}" style="width:100px">
            <h3> HEADQUATER LOGIN </h3>
        </div></a>
    </div>
</div>

@include('inc.footer')
@endsection
