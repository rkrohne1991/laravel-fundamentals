@extends('layouts.app')

@section('content')

    <h1>Show</h1>

    <h1><a href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a></h1>

@endsection


@section('footer')
@endsection
