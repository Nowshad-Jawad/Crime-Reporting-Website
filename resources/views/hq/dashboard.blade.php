@extends('layouts.app')

@section('content')


@include('inc.navbar')


<div style="background-color:rgba(0,128,128, 0.2); margin:50px; text-align:center;">
    <h1 style="display:block; text-align:center; padding:30px">ALL USERS LIST</h1><br>
    <h3 style="display:block; text-align:center; padding:10px">TOTAL USERS REGISTERED: {{$usercount}}</h3><br>
    <a href="{{ route('admin.create') }}"><button style="font-size:20px;
        color:black;
        border-radius:8px;
        padding: 10px 80px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">Create A New User</button></a><br>
    
    
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
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
        <td style="padding: 12px 15px; text-align:center">{{$user->id}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$user->role}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$user->name}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$user->email}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$user->created_at}}</td>
        <td style="padding: 12px 15px; text-align:center"><a href="{{route('profile.show', $user->id)}}"><button style="font-size:15px;
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
            $users->links('vendor.pagination.semantic-ui') 
        }}
        </div> 
</div> 

<div style="background-color:rgba(0,128,128, 0.2); margin:50px; text-align:center;">
    <h1 style="display:block; text-align:center; padding:30px">POLICE & CIVILLIAN INFORMATION</h1><br>
    <h3 style="display:block; text-align:center; padding:10px">TOTAL CIVILLIANS REGISTERED: {{$civillianscount}}</h3><br>
    <a href="{{route('civillist.index')}}"><button style="font-size:15px;
        color:black;
        border-radius:8px;
        padding: 10px 50px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        margin:20px;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">SHOW ALL CIVILLIANS LIST</button></a>
    <div style="text-align: center; display:flex; justify-content:center; margin-bottom:50px;">
    <table class="agenttable" style="border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
    <caption style="display: table-caption;
    text-align: center;caption-side:bottom; background-color: #0fa2ce">RECENTLY REGISTERED CIVILLIAN LIST</caption>
        <thead>
            <tr style="background-color: #0fa2ce;
            color: #ffffff;
            text-align: left;">
                <th style="padding: 30px 33px; text-align:center">ID</th>
                <th style="padding: 30px 33px; text-align:center">ROLE</th>
                <th style="padding: 30px 33px; text-align:center">USERNAME</th>
                <th style="padding: 30px 33px; text-align:center">EMAIL</th>
                <th style="padding: 30px 33px; text-align:center">REGISTERED AT</th>
            </tr>
        </thead>
        <tbody>
        @foreach($civillians as $civillian)
        <tr>
        <td style="padding: 12px 15px; text-align:center">{{$civillian->id}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$civillian->role}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$civillian->name}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$civillian->email}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$civillian->created_at}}</td>
        <td style="padding: 12px 15px; text-align:center"><a href="{{route('profile.show', $civillian->id)}}"><button style="font-size:15px;
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

    <h3 style="display:block; text-align:center; padding:10px">TOTAL POLICE REGISTERED: {{$policescount}}</h3><br>
    <a href="{{route('policelist.index')}}"><button style="font-size:15px;
        color:black;
        border-radius:8px;
        padding: 10px 50px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        margin:20px;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">SHOW ALL POLICE LIST</button></a>
    <div style="text-align: center; display:flex; justify-content:center; margin-bottom:50px;">
    <table class="agenttable" style="border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
    <caption style="display: table-caption;
    text-align: center;caption-side:bottom; background-color: #0fa2ce">RECENTLY REGISTERED POLICE LIST</caption>
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

</div>

<div style="background-color:rgba(0,128,128, 0.2); margin:50px; text-align:center;">
    <h1 style="display:block; text-align:center; padding:30px">ALL CRIMES INFORMATION</h1><br>
    <h3 style="display:block; text-align:center; padding:10px">TOTAL CRIMES REGISTERED: {{$crimecount}}</h3><br>
    <h3 style="display:block; text-align:center; padding:10px">TOTAL CRIMES SOLVED: {{$solvecount}}</h3><br>
    <a href="{{route('crime.index')}}"><button style="font-size:20px;
        color:black;
        border-radius:8px;
        padding: 10px 80px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">SHOW ALL CRIMES</button></a><br>
    

    <div style="text-align: center; display:flex; justify-content:center; margin-bottom:50px;">
    
    <table class="agenttable" style="border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
     <caption style="display: table-caption;
     text-align: center;caption-side:bottom; background-color: #0fa2ce">LATEST CRIMES</caption>
        <thead>
            <tr style="background-color: #0fa2ce;
            color: #ffffff;
            text-align: left;">
                <th style="padding: 30px 33px; text-align:center">ID</th>
                <th style="padding: 30px 33px; text-align:center">REPORT BY</th>
                <th style="padding: 30px 33px; text-align:center">CRIME TYPE</th>
                <th style="padding: 30px 33px; text-align:center">POLICE STATUS</th>
                <th style="padding: 30px 33px; text-align:center">REGISTERED AT</th>
            </tr>
        </thead>
        <tbody>
        @foreach($crimes as $crime)
        <tr>
        <td style="padding: 12px 15px; text-align:center">{{$crime->c_id}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$crime->report_by}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$crime->c_type}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$crime->p_status}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$crime->created_at}}</td>
        <td style="padding: 12px 15px; text-align:center"><a href="{{route('showcomplain.show', $crime->c_id)}}"><button style="font-size:15px;
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

</div>

<div style="background-color:rgba(0,128,128, 0.2); margin:50px; text-align:center; padding:20px">
    <h1 style="display:block; text-align:center; padding:30px">ALL MESSAGES</h1><br>
    <div style="text-align: center; display:flex; justify-content:center; margin-bottom:50px;">
    
    <table class="agenttable" style="border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
     <caption style="display: table-caption;
     text-align: center;caption-side:bottom; background-color: #0fa2ce">RECENT MESSAGES</caption>
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
        <td style="padding: 12px 15px; text-align:center"><a href="{{route('showmessage.show', $message->id)}}"><button style="font-size:15px;
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
    <a href="{{route('messages.index')}}"><button style="font-size:20px;
        color:black;
        border-radius:8px;
        padding: 10px 80px;
        transition-duration: 0.7s;
        border: none;
        cursor:pointer;
        text-align:center;
        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">SHOW ALL MESSAGES</button></a><br>

</div>

@include('inc.footer')

@endsection

