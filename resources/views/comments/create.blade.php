@extends('layouts.app')

@section('content')
<h1>Leave Comment</h1>
{!! Form::open(['action'=>'CommentsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div class="form-group">
{{Form::label('body', 'Body')}}
    {{Form::textarea( 'body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Type your post here...'])}}
</div>
    {{Form::file('cover_image')}}
<div class="form-group">

</div>

{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection

