@extends('layouts.app')
<style>
    form{
        
        text-align:center;
     
    }
    label{
        display:inline-block;
        padding:50px 80px;
        font-size:30px;
        color:white;
        text-justify: newspaper;
    }
    input{
        margin: 3%;
        width:300px;
        height:40px;
    }

    .flex-container{
        display: flex;
        justify-content:center;
        padding:3em;
        
    }

    .container{
        background-color:rgba(38, 36, 36, 0.4);
        width:70%;
        box-sizing:border-box;
        border: 1px solid white; 
    }
    
</style>

@section('content')
@include('inc.navbar')


    <div class="flex-container">
        <div class="container" style="text-align: center">
            
                @if($name == 'civil')
                    <h1>Civillian Login</h1>
                @elseif($name == 'police')
                    <h1>Police Login</h1>
                @else
                    <h1>Headquater Login</h1>
                @endif
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <p >
                    <b><label for="email">{{ __('E-Mail Address') }}</label></b>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="border:inset">
    
                        @error('email')
                            <span>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br> 
    
                        <b><label for="password" style="padding:50px 120px;">{{ __('Password') }}</label>
    
                        <input id="password" type="password" name="password" required autocomplete="current-password" style="border:inset">
    
                        @error('password')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror 
                        <br>
                        <input  type="checkbox" style="padding:0; width:30px;
                        height:20px;" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                        <label  for="remember" style="padding:0; font-size:20px;">
                            {{ __('Remember Me') }}
                        </label>
                        <br>
                        <button type="submit" style="font-size:20px;
                        color:black;
                        border-radius:8px;
                        padding: 10px 80px;
                        transition-duration: 0.7s;
                        border: none;
                        cursor:pointer;
                        text-align:center;
                        margin:40px;
                        background-color: aliceblue;" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#000000'">
                            {{ __('Login') }}
                        </button>
                        <br>
                        @if (Route::has('password.request'))
                            <a  href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                                        
                    </p>

                                 
            </form>
        </div>
    </div>
    @include('inc.footer')
@endsection

