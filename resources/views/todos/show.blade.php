@extends('layouts.app')

@section('content')
    <h1>{{ $todo->title }}</h1>

    <a href="{{ route('todos.edit', $todo) }}" class="btn btn-primary">
        Edit
    </a>

    <form method="POST" action="{{ route('todos.destroy', $todo) }}" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this todo?')">Delete</button>
    </form>
@endsection