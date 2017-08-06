@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
<h1>{{$title}}</h1>
<p>This is the Laravel application that I will be working on.</p>
@if(Auth::guest())
<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register">Register</a>
@endif
</div>
@endsection
