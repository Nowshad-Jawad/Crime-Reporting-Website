@extends('layouts.app')
<style>
    form{
        
        text-align:center;
     
    }
    label{
        display:inline-block;
        padding:10px 80px;
        font-size:30px;
        color:white;
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
        width:80%;
        box-sizing:border-box;
        border: 1px solid white;
        background-color:rgba(38, 36, 36, 0.4) ;  
    }

    h1{
        text-align: center;
        font-size:40;
        color:white;

    }
    
</style>

@section('content')
@include('inc.navbar')
<div class="flex-container">
    <div class="container">
        <h1>{{ __('REGISTER') }}</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name" >{{ __('Name') }}</label>    <br>                   
            <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="border:inset">

                @error('name')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                    
            <br>
            <label for="email" style="padding:30px 20px;">{{ __('E-Mail Address') }}</label><br>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" style="border:inset">

                @error('email')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                
            <br>
            <label for="voterid" style="padding:30px 20px;">{{ __('Voter Id No.') }}</label><br>
            <input id="voterid" type="text" name="voterid" style="border:inset">

                @error('voterid')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                
            <br>
            <label for="mobile" style="padding:30px 20px;">{{ __('Mobile No.') }}</label><br>
            <input id="mobile" type="text" name="mobile" style="border:inset">

                @error('mobile')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                
            <br>
            <label for="address" style="padding:30px 20px;">{{ __('Address') }}</label><br>
            <input id="address" type="text" name="address" style="border:inset">

                @error('address')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                
            <br>
            <label for="gender" style="padding:30px 10px;">{{ __('Gender') }}</label><br>
            <select name="gender" style="width:100px; height:30px">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
              </select>
                            
            <br>
            <label for="dobirth" style="padding:30px 20px;">{{ __('Date Of Birth') }}</label><br>
            <input id="dobirth" type="date" name="dobirth" style="border:inset">

                @error('dobirth')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                
            <br>
        
            
            <label for="password" style="padding:30px 60px;">{{ __('Password') }}</label><br>
            <input id="password" type="password" name="password" required autocomplete="new-password" style="border:inset">

                @error('password')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <br>
            <label for="password-confirm" style="padding:30px 10px;">{{ __('Confirm Password') }}</label>  <br>        
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="border:inset"><br>

            <label for="role" style="padding:30px 10px;">{{ __('Register As') }}</label><br>
            <select name="role" style="width:100px; height:30px">
                <option value="0">Civillian</option>
                <option value="1">Police</option>
              </select>
                            
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
                    {{ __('Register') }}
                </button>
            <br>                       
        </form> 
    </div>
</div>
@include('inc.footer')
@endsection
