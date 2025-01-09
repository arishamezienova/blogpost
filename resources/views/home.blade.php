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
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <p>This is home page.</p>
@endsection
