
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>To-do List</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

  <div class="container">

    <form action="{{ route('logout') }}" method="POST"">
        @csrf
      <p>Logged as <strong>{{Auth::user()->name}}</strong></p><button type="submit" class="waves-effect waves-light btn">Logout</button>
    </form>

      @isAdmin
      <ul class="collapsible">
        <li>
          <div class="collapsible-header"><i class="material-icons">person_add</i>First</div>
          <div class="collapsible-body">
            <p>
              <span class="red-text">John Doe - <a href="#">accept</a> | <a href="#">deny</a></span>
            </p>
            <p>
              <span class="red-text">Jane Doe - <a href="#">accept</a> | <a href="#">deny</a></span>
            </p>
            <p>
              <span class="red-text">Bob Alisson - <a href="#">accept</a> | <a href="#">deny</a></span>
            </p>
          </div>
        </li>
      </ul>
      @endisAdmin

      <h1 class="center-align green-text text-darken-2">To-do List</h1>

      @yield('content')

  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.collapsible');
        var options;
        var instances = M.Collapsible.init(elems, options);
      });

      document.addEventListener('DOMContentLoaded', function () {
          var elems2 = document.querySelectorAll('select');
          var instances = M.FormSelect.init(elems2,);
        });

  </script>
  </body>
</html>