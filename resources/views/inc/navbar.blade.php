<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<style>
    .navbar button{font-size:20px;
    color:black;
    border-radius:8px;
    padding: 1em 1em;
    transition-duration: 0.7s;
    border: none;
    cursor:pointer;
    text-align:center;
    }

</style>

<nav>  
    <div class="navbar">
        @if(Auth::guest())
            @if (Request::is('login'))
            <ul style="list-style-type:none; 
            margin:0px; 
            padding:0px; 
            overflow: hidden; 
            background-color: black;">
                <li style="float:left;
                display:inline-block; 
                padding:1em;"> <a href="{{route('index')}}" style="text-align:center;
    text-decoration:none;
    color:white;" ><img src="{{URL('images/logo.png')}}" width="200" height="80"></a></li>
                <li  style="float:right;
                display:inline-block; 
                padding:1em;"> <a href="{{route('contact.index')}}" style="text-align:center;
    text-decoration:none;
    color:white;" ><p><button onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"><i class="fa fa-question-circle"> Contact</i></button></p></a></li>
    <li  style="float:right;
    display:inline-block; 
    padding:1em;"> <a href="" style="text-align:center;
text-decoration:none;
color:white;" ><p><button onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"><i class="fa fa-question-circle"> Emergency Call 999</i></button></p></a></li>
                <li  style="float:right;
                display:inline-block; 
                padding:1em;"><a href="{{route('register')}}" style="text-align:center;
    text-decoration:none;
    color:white;"><p><button  onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"><i class="fa fa-user-plus"> Sign Up</i></button><p></a></li>         
            </ul>


            @else
            <ul style="list-style-type:none; 
            margin:0px; 
            padding:0px; 
            overflow: hidden; 
            background-color: black;">
                <li style="float:left;
                display:inline-block; 
                padding:1em;"> <a href="{{route('index')}}" style="text-align:center;
    text-decoration:none;
    color:white;"><img src="{{URL('images/logo.png')}}" width="200" height="80"></a></li>
                <li  style="float:right;
                display:inline-block; 
                padding:1em;"> <a href="{{route('contact.index')}}" style="text-align:center;
    text-decoration:none;
    color:white;" ><p><button onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"><i class="fa fa-question-circle"> Contact</i></button></p></a></li>
        <li  style="float:right;
        display:inline-block; 
        padding:1em;"> <a href="" style="text-align:center;
    text-decoration:none;
    color:white;" ><p><button onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"><i class="fa fa-question-circle"> Emergency Call 999</i></button></p></a></li>
                <li  style="float:right;
                display:inline-block; 
                padding:1em;"> <a href="{{route('loginpurpose.index')}}" style="text-align:center;
    text-decoration:none;
    color:white;" ><p><button onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"><i class="fa fa-sign-in"> Sign In</i></button><p></a></li>
                
            </ul>
            @endif
        @else
        <ul style="list-style-type:none; 
        margin:0px; 
        padding:0px; 
        overflow: hidden; 
        background-color: black;">
            <li style="float:left;
            display:inline-block; 
            padding:1em;"> <a href="{{route('home')}}" style="text-align:center;
    text-decoration:none;
    color:white;"><img src="{{URL('images/logo.png')}}" width="200" height="80"></a></li>
            <li  style="float:right;
            display:inline-block; 
            padding:20px 10px;"> <a href={{route('logout')}} style="text-align:center;
    text-decoration:none;
    color:white;" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><p><button onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"><i class="fa fa-sign-out"> Sign Out</i></button></p></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>    
            </li>
            <li  style="float:right;
            display:inline-block; 
            padding:20px 20px;"> <a href="{{route('contact.index')}}" style="text-align:center;
    text-decoration:none;
    color:white;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"><p><button><i class="fa fa-question-circle"> Contact</i></button></p></a></li> 
      </li>
      <li  style="float:right;
      display:inline-block; 
      padding:1em;
      margin-top:4px"> <a href="" style="text-align:center;
  text-decoration:none;
  color:white;" ><p><button onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"><i class="fa fa-question-circle"> Emergency Call 999</i></button></p></a></li>
      <li  style="float:right;
      display:inline-block; 
      padding:20px 20px;"> <a href="{{route('profile.index')}}" style="text-align:center;
text-decoration:none;
color:white;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'"><p><button><i class="fa fa-user"> Profile</i></button></p></a></li>           
        </ul>
        @endif
    </div>
    </nav>
