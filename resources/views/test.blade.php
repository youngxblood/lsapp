@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
{{-- <h1>{{$title}}</h1> --}}
<p>This is the Laravel application that I will be working on.</p>
<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg">Register</a>
</div>

{{-- <div id="app">
    @{{ message }}
</div> --}}
<div id="app">
  <example></example>
</div>

@endsection
