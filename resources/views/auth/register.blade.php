@extends('layouts.layout')

@section('title', 'Register')

@section('content')
    <h1>Registreer een nieuw account</h1>

    <form action="{{route('register')}}" method="POST">
        @csrf

        <label for="name">Naam:</label>
        <input type="text" name="name" id="name" value="{{old('name')}}">
        @error('name')
            <div class="error">{{$message}}</div>
        @enderror

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="{{old('email')}}">
        @error('email')
            <div class="error">{{$message}}</div>
        @enderror

        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" id="password" required>

        <label for="password_confirmation">Bevestig wachtwoord:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
        @error('password')
            <div class="error">{{$message}}</div>
        @enderror

        <button type="submit">Registreer</button>
    </form>
    @if(session('success'))
        <p>{{session('success')}}</p>
    @endif

    <p>Heb je al een account? <a href="{{route('login')}}">Log in</a></p>
@endsection
