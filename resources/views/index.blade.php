@extends('layouts.master')
@section('content')

<table>
  <thead>
    <tr>
      <th>Tasks</th>
      <th>Assigned to</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="">Slim down 10 kg</a></td>
      <td>John Doe</td>
      <td><a href="" title="edit"><i class="small material-icons">edit</i></a></td>
      <td><a href="" title="delete"><i class="small material-icons">delete</i></a></td>
    </tr>
    <tr>
      <td><a href="">Jog 3x a week</a></td>
      <td>Jane Doe</td>
      <td><a href="" title="edit"><i class="small material-icons">edit</i></a></td>
      <td><a href="" title="delete"><i class="small material-icons">delete</i></a></td>
    </tr>
    <tr>
      <td><a href="">Repair bike</a></td>
      <td>Alice Boberson</td>
      <td><a href="" title="edit"><i class="small material-icons">edit</i></a></td>
      <td><a href="" title="delete"><i class="small material-icons">delete</i></a></td>
    </tr>
    <tr>
      <td><a href="">Learn how to cook</a></td>
      <td>Bob Alisson</td>
      <td><a href="" title="edit"><i class="small material-icons">edit</i></a></td>
      <td><a href="" title="delete"><i class="small material-icons">delete</i></a></td>
    </tr>
  </tbody>
</table>

  <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
  <br>
  <form class="col s12">
    <div class="row">
      <div class="input-field">
        <input placeholder="New Task" id="task" type="text" class="validate">
        <label for="task"></label>

        <div class="input-field">
          <select>
            <option value="" disabled selected>Assign to:</option>
            <option value="1">Myself</option>
            <option value="2">John Doe</option>
            <option value="3">Jane Doe</option>
            <option value="4">Alice Boberson</option>
            <option value="5">Bob Alisson</option>
          </select>
        </div>

        <a class="waves-effect waves-light btn">Add new task</a>

      </div>
  </form>

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

@endsection

