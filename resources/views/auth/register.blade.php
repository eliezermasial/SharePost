@extends('auth.auth-layout')
@section('title', 'Enregister')
@section('auth')
<div class="login-right-wrap">
    <h1 class="mb-3">@yield('title')</h1>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="form-group">
            <input class="form-control" type="name" name="name" value="{{old('name')}}" placeholder="Nom complet">
            @error('name')
                <p class="text-red-400"> {{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="Email">
            @error('email')
                <p> {{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" value="{{old('password')}}" placeholder="Mot de passe">
            @error('password')
                <p> {{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="Confirmer Mot de passe">
            @error('password_confirmation')
                <p> {{$message}} </p>
            @enderror
        </div>
        <div class="form-group mb-0">
            <button class="btn btn-primary btn-block" type="submit">S'inscrire</button>
        </div>
    </form>
    
    <div class="text-center dont-have">Vous avez deja un compte? <a href="{{route('login')}}">Se connecter</a> </div>
</div>
@endsection