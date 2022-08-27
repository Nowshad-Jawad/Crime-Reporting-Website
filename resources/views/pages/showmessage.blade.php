@extends('layouts.app')
@section('content')

@include('inc.navbar')

<div style="text-align:center; margin:30px; background-color:rgba(0,128,128, 0.2); padding:20px">
    <h1>MESSAGE</h1>
<div style="padding:10px">SENDER : <br>{{$message->sender}}<br></div>
<div style="padding:10px">RECIPIENT : <br>{{$message->recipient}}<br></div>
<div style="padding:10px">SENT AT : <br>{{$message->created_at}}<br></div>
<div style="margin:30px 100px; background-color:rgba(245,245,245,0.8); padding:20px">  
<div style="padding:20px">SUBJECT : <br>{{$message->subject}}<br></div>
<div style="padding:20px">MESSAGE : <br>{{$message->message}}<br></div>
</div>
</div>
@include('inc.footer')
@endsection