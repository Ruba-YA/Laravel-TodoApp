@extends('layouts.app')

@section('content')
   <center> <h2>Todos</h2></center>


        @if($todos->count())
        @foreach($todos as $todo)
        <div id="tasks">
            <h3>    {{ $todo->title }}</h3>
                    <a href="{{ route('todos.edit', $todo) }}" >Edit</a>
                    <form action="{{ route('todos.destroy', $todo) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit"onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                    </div>
        @endforeach
        @else
        <center><h1>There is no todos</h1></center>

        @endif
    </ul>

    <a href="{{ route('todos.create') }}" class="btn">Add Todo</a>

@endsection