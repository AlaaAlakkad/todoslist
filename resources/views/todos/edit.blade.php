@extends('layouts.app')
@section('content')
    <a href="/todo/{{$todo->id}}" class="btn">Go Back</a>
    <h1>Edit</h1>
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method'=>'POST'])!!}
        {{ Form::appTextForm('text', $todo->text) }}
        {{ Form::appTextarea('body', $todo->body) }}
        {{ Form::appTextForm('due', $todo->due) }}
        {{ Form::hidden('_method', 'PUT')}}
        {{ Form::appSubmit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}

@endsection