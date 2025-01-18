@extends('auth.auth-layout')
@section('title', 'Forgot password')
@section('auth')
    
<div class="login-right-wrap">
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-4">
        {{session('status')}}
        <a href="https://mailtrap.io/inboxes/3397932/messages/4662069266"> clique ici</a>
    </div>
    @endif
    <form action="{{route('password.email')}}" method="POST">
        @csrf
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email">
            @error('email')
                <p> {{$message}} </p>
            @enderror
        </div>
        <div class="form-group mb-0">
            <button class="btn btn-primary btn-block" type="submit"> {{__('Email Password Reset Link')}} </button>
        </div>
        <div class="form-group mb-0">
            <a class="text-black" href="{{route('login')}}">login</a>
        </div>
    </form>
</div>
@endsection
