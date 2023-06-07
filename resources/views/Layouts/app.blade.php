<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
 
                    <a  class="nav" href="{{ route('todos.index') }}">Todos</a>
              
                    <a  class="nav" href="{{ route('todos.create') }}">Add Todo</a>
          
      

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>