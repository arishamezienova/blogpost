@extends('layouts.layout')

@section('content')
    <h1>Login</h1>

    <!-- Login formulier -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')<p>{{$message}}</p>@enderror
        </div>

        <div>
            <label for="password">Wachtwoord</label>
            <input type="password" name="password" id="password" required>
            @error('password')<p>{{$message}}</p>@enderror
        </div>

        <button type="submit">Inloggen</button>
    </form>
    <!-- Het succes bericht tonen als het aanwezig is-->
    @if(session('success'))
        <p>{{session('success')}}</p>
    @endif

    @if(session('error'))
        <p>{{session('error')}}</p>
    @endif
@endsection
