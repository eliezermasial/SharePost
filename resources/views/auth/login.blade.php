@extends('auth.auth-layout')
@section('title', 'login')
@section('auth')

<div class="login-right-wrap">
    <h1 class="mb-3">@yield('title') </h1>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email">
            @error('email')
                <p> {{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="password" placeholder="Mot de passe">
            @error('password')
                <p> {{$message}} </p>
            @enderror
        </div>
        <div class="form-group mb-0">
            <button class="btn btn-primary btn-block" type="submit">Se connecter</button>
        </div>
        <div class="flex items-center justify-arround mt-4">
            <div>
                @if (Route::has('password.request'))
                    <a class="underline text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <div>
                <a href="{{route('register')}}">Enregister</a>
            </div>
        </div>
    </form>

</div>
@endsection

