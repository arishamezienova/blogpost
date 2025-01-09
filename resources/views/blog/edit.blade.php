@extends('layouts.layout')

@section('title', 'Bewerk Blog Post')
<h1>Bewerk Blog Post</h1>

@section('content')
    <form method="POST" action="{{ route('blog.update', ['blog' => $blog->id]) }}">
        @csrf
        @method('PUT') <!-- Zorg ervoor dat de juiste HTTP-methode wordt gebruikt -->

        <!-- Vul de velden met de huidige waarden van de blogpost -->
        <label for="title">Titel:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}">
        @error('title')
        <div class="error">{{ $message }}</div>
        @enderror

        <label for="content">Omschrijving:</label>
        <textarea name="content" id="content">{{ old('content', $blog->content) }}</textarea>
        @error('content')
        <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Update</button>
    </form>

@endsection
