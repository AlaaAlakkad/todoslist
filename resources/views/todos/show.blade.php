@extends('layouts.app')

@section('content')
    <a class="btn" href="/">Go Back</a>
    <h1>{{$todo->text}}</h1>
    <span class="badge badge-danger mb-3">{{$todo->due}}</span>
    <p class="mb-3">{{$todo->body}}</p>

    <a class="btn" href="/todo/{{$todo->id}}/edit">Edit</a>
@endsection