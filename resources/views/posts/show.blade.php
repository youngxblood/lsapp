@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Back</a>
<h1>{{$post->title}}</h1>

<img  width="350px" height="350px" style="width: 100%; height: auto;" src="/storage/cover_images/{{$post->cover_image}}">
<br>
<br>


<div style="width: 100%; height: auto; overflow: hidden; word-wrap: break-word;" class="col-lg-8">
    {!! $post->body !!}
</div>
<hr><small>Written on: {{$post->created_at}} || Written by: {{$post->user->name}}</small>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST' , 'class' => 'pull-right']) !!}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}

{!! Form::close() !!}
@endif


{{-- <a href="/comments/create" class="btn btn-default">Comment</a> --}}
{!! Form::open(['action' => ['CommentsController@create', $post->id], 'method' => 'POST' , 'class' => 'pull-right']) !!}
{{Form::submit('Comment', ['class' => 'btn btn-default'])}}
{!! Form::close() !!}

@endif
<hr>
<hr>
<hr>

@endsection
