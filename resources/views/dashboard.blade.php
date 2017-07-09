@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <h2>Hello, {{Auth::user()->name}}</h2>

                <div class="panel-body">
                    @if(Auth::user()->id == 1)
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    @endif
                    <h3>Your Blog Posts.</h3>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>

                        </tr>
                        @foreach($posts as $post)
                        <tr>
                        <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                            <td>
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST' , 'class' => 'pull-right']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}

                                {!! Form::close() !!}</td>
                            </tr>
                            @endforeach
                            @else <p>You have no posts.</p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
