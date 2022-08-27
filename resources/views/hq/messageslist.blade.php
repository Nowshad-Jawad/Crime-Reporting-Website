@extends('layouts.app')

@section('content')

@include('inc.navbar')

<div style="background-color:rgba(0,128,128, 0.2); margin:50px; text-align:center;">
    <h1 style="display:block; text-align:center; padding:30px">ALL MESSAGES</h1><br>
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
                <th style="padding: 30px 33px; text-align:center">SENDER</th>
                <th style="padding: 30px 33px; text-align:center">RECIPIENT</th>
                <th style="padding: 30px 33px; text-align:center">SUBJECT</th>
                <th style="padding: 30px 33px; text-align:center">SENT AT</th>
            </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
        <tr>
        <td style="padding: 12px 15px; text-align:center">{{$message->sender}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$message->recipient}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$message->subject}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$message->created_at}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
    </div>
    <div style="padding:15px; background-color:rgba(245, 245, 245, 0.8);">
        {{ 
            $messages->links('vendor.pagination.semantic-ui') 
        }}
        </div> 
</div>
@include('inc.footer')  
@endsection