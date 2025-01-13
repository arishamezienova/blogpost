@extends('layouts.layout')

@section('title', $post->title)

@section('content')
    <div class="post-item">
        <div class="post-content">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <small>Gemaakt door: {{ $post->user ? $post->user->name : 'Onbekende gebruiker' }}</small>


            @if(auth()->check() && auth()->user()->id === $post->user_id)
                <a href="{{ route('blog.edit', ['blog' => $post->id]) }}">Bewerk deze post</a>
            @endif
            @if(auth()->check() && auth()->user()->id === $post->user_id)
                <form action="{{ route('blog.destroy', ['blog' => $post->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Weet je zeker dat je deze post wilt verwijderen?')">Verwijder deze post</button>
                </form>
            @endif

        </div>
    </div>
@endsection
