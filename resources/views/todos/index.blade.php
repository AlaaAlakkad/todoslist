@extends('layouts.app')
@section('content')
    <h1>Todos</h1>
    @if(count($todos)>0)
        @foreach($todos as $todo)
        <div class="card mb-3">
            <div class="card-body">
                <h3>{{$todo->text}} <span class="badge badge-danger">{{$todo->due}}</span></h3>
                
            </div>
        </div>
        @endforeach
    @endif
@endsection