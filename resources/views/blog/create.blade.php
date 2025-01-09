@extends('layouts.layout')

@section('title', 'Nieuwe Blog Post')

@section('header' , 'Blog Post')

@section('content')
    <!-- Voeg het Flash succesbericht toe-->
    @if(session('success'))
        <div class="flash-success">
            {{ session('success') }}
        </div>
    @endif
    <!--Toon het flash-bericht als het bestaat -->
    @include('partials._error')
    <h1>Maak een nieuwe Blog Post aan</h1>

    <!--Begin van formulier -->
    <form action="{{ route('blog.store') }}" method="POST">
        @csrf <!--Beveiliging-->

        <!-- Titelveld -->
        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" value="{{old('title')}}" class="{{$errors->has('title') ? 'error-border' : '' }}" required>

        @error('title')
        <div class="error">{{$message}}</div>
        @enderror

        <!--Omschrijvingsvelden-->
        <label for="content">Inhoud:</label>
        <textarea id="content" name="content" rows="5" class="{{$errors->has('content') ? 'error-border' : '' }}" required> {{old('content')}}</textarea>

        @error('content')
        <div class="error">{{$message}}</div>
        @enderror

        <!--Submit button-->
        <button type="submit">Post Aanmaken</button>
    </form>
@endsection
