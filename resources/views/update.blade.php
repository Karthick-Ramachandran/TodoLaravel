@extends('layouts')

@section('content')
<div class="row mt-5">
        <div class="col-md-6 offset-md-3">
        <form action="{{route('todo.save', ['id' => $todo->id])}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <center>
                    <input type="text" class="form-control" name="todo" value="{{ $todo->todo }}" placeholder="Update a new Todo Here">
                    </center>
                </div>
            </form>
        </div>
    </div>

@stop