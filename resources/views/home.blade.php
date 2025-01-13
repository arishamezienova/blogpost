@extends('layouts.layout')

@section('title', 'Blog')

@section('header', 'Home Page')

@section('content')
    <div class="blog-posts">
        @if($posts->isEmpty())
            <p>Er zijn geen blogposts beschikbaar.</p>
        @else
            @foreach($posts as $post)
                <div class="post-item">
                    <div class="post-content">
                        <!-- De titel klikbaar maken-->
                        <h2>
                            <a href="{{route('blog.show', ['blog' => $post->id])}}">
                                {{$post->title}}
                            </a>
                        </h2>

                        <p>{{$post->content}}</p>
                        <!--Hier tonen we de gebruiker die het bericht heeft geplaatst-->
                        <small>Gemaakt door:
                            @if($post->user)
                                {{$post->user->name}}
                            @else
                                Onbekend
                            @endif
                        </small>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <p>This is home page.</p>
@endsection
