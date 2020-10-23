@extends('layouts.app')

@section('content')

    <h1>Index</h1>

    <ul>
        @foreach($posts as $post)

            <div class="image-container">

                <img height="200" src="{{$post->path}}" alt="">

            </div>

            <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>

        @endforeach
    </ul>

@endsection


@section('footer')
@endsection
