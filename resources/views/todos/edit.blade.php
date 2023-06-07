@extends('layouts.app')

@section('content')
    <h1>Edit Todo</h1>

    <form method="POST" action="{{ route('todos.update', $todo) }}">
        @csrf
        @method('PUT')

        <div id="newtask">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $todo->title) }}" required autofocus>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Todo</button>
    </form>
@endsection