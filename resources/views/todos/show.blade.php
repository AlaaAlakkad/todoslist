@extends('layouts.app')

@section('content')
    <a class="btn" href="/">Go Back</a>
    <h1>{{$todo->text}}</h1>
    <span class="badge badge-info mb-3">{{$todo->due}}</span>
    <p class="mb-3">{{$todo->body}}</p>

    <div class="form-inline">
        <a class="btn" href="/todo/{{$todo->id}}/edit">Edit</a>
        {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method'=>'POST']) !!}
        {{ Form::hidden('_method', 'DELETE')}}
        {{ Form::appSubmit('Delete', ['class'=>'btn btn-danger btn-sm'])}}
        {!! Form::close() !!}
    </div>

@endsection