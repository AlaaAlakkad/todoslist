@extends('layouts.app')
@section('content')
    <h1>Create</h1>
    {!! Form::open(['action' => 'TodosController@store', 'method'=>'POST'])!!}
        {{ Form::appTextForm('text') }}
        {{ Form::appTextarea('body') }}
        {{ Form::appTextForm('due') }}
        {{ Form::appSubmit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}

@endsection