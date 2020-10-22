@extends('layouts.app')

@section('content')

    <h1>Edit Post</h1>

    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['App\Http\Controllers\PostsController@update', $post->id]]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', $post->title, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}


    {!! Form::model($post, ['method'=>'Delete', 'action'=>['App\Http\Controllers\PostsController@destroy', $post->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
        </div>

    {!! Form::close() !!}

@endsection


@section('footer')
@endsection
