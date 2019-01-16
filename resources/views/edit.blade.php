@extends('layouts.master')
@section('content')

<form method="POST" action="{{ route('update', ['id'=>$task->id]) }}" class="col s12">
  <div class="row">
    <div class="input-field">
      <input name="task" value="{{ $task->content }}" id="task2" type="text" class="validate">
      <label for="task">Edit Task</label>
    </div>

      @include('partials.coworkers')

      <button type="submit" class="waves-effect waves-light btn">Edit task</button>
      @csrf
  </div>
</form>

@endsection