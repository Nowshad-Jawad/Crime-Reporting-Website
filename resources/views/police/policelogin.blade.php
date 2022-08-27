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
        width:70%;
        box-sizing:border-box;
        border: 1px solid white;
        background-color:rgba(38, 36, 36, 0.4);  
    }
    
</style>

@section('content')
@include('inc.navbar')


    <div class="flex-container">
        <div class="container">
            <form method="POST" action="{{ route('policelogin.store') }}">
                @csrf
                <h1>Police Login</h1>

                <p>
                <b><label for="policeid">{{ __('Police ID') }}</label></b>
                    <input id="policeid" type="string" name="policeid" required autofocus style="border:inset">

                    @error('policeid')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
                        {{ __('NEXT') }}
                    </button>
                    <br>

                                    
                </p>                  
            </form>
        </div>
    </div>
    @include('inc.footer')
@endsection

