@extends('layouts.app')

@section('content')
@include('inc.navbar')
<div class="container" style="text-align:center; background-color:rgba(245,245,245,0.8); margin:100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="padding:30px"><b>{{ __('Verify Your Email Address') }}</b></div>

                <h3>Please check the provided email and verify your email account.</h3>
            </div>
        </div>
    </div>
</div>
@include('inc.footer')
@endsection
