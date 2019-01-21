@extends('layouts.master')
@section('content')

<table>
  <thead>
    <tr>
      <th>Tasks</th>
      @isAdmin
      <th>Assigned to</th>
      @endisAdmin
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
    <tr>
      <td><a href="{{ route('updateStatus', $task->id) }}">
      @if(!$task->status)
        {{ $task->content }}
      @else
        <strike class="grey-text">{{ $task->content }}</strike>
      </a></td>
      @endif
      @isAdmin
      <td>{{$task->user->name}}</td>
      @endisAdmin
      <td><a href="{{route('edit', $task->id)}}" title="edit"><i class="small material-icons">edit</i></a></td>
      <td><a href="{{route('delete', $task->id)}}" title="delete" onclick="return confirm('Delete task?')"<i class="small material-icons">delete</i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $tasks->links('vendor.pagination.materialize') }}
  {{--<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>--}}
  <br>

  <form method="POST" action="{{ route('store') }}" class="col s12">
    <div class="row">
      <div class="input-field">
        <input placeholder="New Task" name="task" id="task" type="text" class="validate">
        <label for="task"></label>

        @include('partials.coworkers')

        <button type="submit" class="waves-effect waves-light btn">Add new task</button>
        @csrf
      </div>
  </form>

  @isWorker
  <form action="{{ route('sendInvitation') }}" method="POST" class="col s12">
    <div class="input-field">
      <select name="admin">
        <option disabled selected>Send invitation to:</option>

        @foreach ($coworkers as $coworker)
            <option value="{{ $coworker->id }}">{{ $coworker->name }}</option>
        @endforeach

      </select>
    </div>
    <button type="submit" class="waves-effect waves-light btn">Send</button>
    @csrf
  </form>
  @endisWorker


  @isAdmin
  <ul class="collection with-header">
    <li class="collection-header">
      <h4>My Coworkers</h4>
    </li>
    <li class="collection-item">
      <div>John Doe<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div>
    </li>
    <li class="collection-item">
      <div>Jane Doe<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div>
    </li>
    <li class="collection-item">
      <div>Alice Boberson<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div>
    </li>
    <li class="collection-item">
      <div>Bob Alisson<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div>
    </li>
  </ul>
@endisAdmin

@endsection

