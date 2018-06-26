@extends('layouts')



@section('content')
<center>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <form action="/create/todo" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <center>
                    <input type="text" class="form-control" name="todo" placeholder="Add a new Todo Here">
                    </center>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5">
<p class=""> 
    @foreach ( $todos as $todo )
{{ $todo -> todo }} <a href="{{ route('todo.delete', ['id' => $todo->id]) }} " class="btn btn-danger">Del</a> 

@if(!$todo->completed)
<a href="{{ route('todo.update', ['id' => $todo->id ])  }}" class="btn btn-warning">Upd</a>
<a href="{{ route('todo.completed', ['id' => $todo->id]) }}" class="btn btn-success">Completed</a>


@else
<span class="text-muted">Completed task!</span>

@endif   


<div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
<br>
    
@endforeach
</p>            
    </div>
</center>
@stop