@extends('auth.auth-layout')
@section('title', 'login')
@section('auth')

<div class="login-right-wrap">
    <h1 class="mb-3">@yield('title') </h1>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="form-group">
            <input class="form-control tw-rounded-md tw-border-2 tw-border-[#2423236e]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" type="email" name="email" value="{{old('email')}}"laceholder="Email">
            @error('email')
                <p> {{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control tw-rounded-md tw-border-2 tw-border-[#2423236e]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" type="password" name="password" value="{{old('password')}}"laceholder="Mot de passe">
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

