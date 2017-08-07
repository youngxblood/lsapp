@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This is the Laravel application that I will be working on.</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg">Register</a>
    </div>


    <style>
        [v-cloak] {
            display: none;
        }
    </style>



{{-- <div id="app">
  <example></example>
  @{{ onOff }}
  <button v-on:click = "toggleOnOff">Button</button>
</div> --}}

<div id="app">
    <h1>@{{ message }}</h1>
    <ul>
        <li v-cloak v-for = "todo in todos">@{{ todo.text }}</li>
    </ul>
</div>

@endsection
