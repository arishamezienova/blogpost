@extends('layouts.layout')

@section('title', $post->title)

@section('content')
    <div class="post-item">
        <div class="post-content">
            <h2>{{$post->title}}</h2>
            <p>{{$post->content}}</p>
            <!-- Edit knop-->
            <a href="{{route('blog.edit', ['blog' => $post->id])}}">Bewerk deze post</a>
            <!-- Delete knop-->
            <form action="{{ route('blog.destroy', ['blog' => $post->id]) }}" method="POST">
                @csrf
                @method('DELETE') <!-- Zorg ervoor dat de juiste HTTP-methode wordt gebruikt -->
                <button type="submit" onclick="return confirm('Weet je zeker dat je deze post wilt verwijderen?')">Verwijder deze post</button>
            </form>

        </div>
    </div>

@endsection
