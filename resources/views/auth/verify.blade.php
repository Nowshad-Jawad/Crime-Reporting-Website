@extends('layouts.app')

@section('content')
@include('inc.navbar')
<div class="container" style="text-align:center; background-color:rgba(245,245,245,0.8); margin:100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="padding:30px"><b>{{ __('Verify Your Email Address') }}</b></div>

                <div class="card-body" style="padding:20px;">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                
                    <div style="padding:20px">{{ __('Before proceeding, please check your email for a verification link.') }}</div>
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}" style="padding:20px">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inc.footer')
@endsection
