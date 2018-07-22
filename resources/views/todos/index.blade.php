@extends('layouts.app')
@section('content')
    <h1>Todos</h1>
    @if(count($todos)>0)
        @foreach($todos as $todo)
        <div class="card mb-3">
            <div class="card-body">
                <h3><a href="todo/{{$todo->id}}">{{$todo->text}} <span class="badge badge-danger">{{$todo->due}}</span></a></h3>
                
            </div>
        </div>
        @endforeach
    @endif
@endsection