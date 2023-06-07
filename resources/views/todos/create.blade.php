@extends('layouts.app')

@section('content')
   <center> <h1>Add New Todo</h1>

    <form method="POST" action="{{ route('todos.store') }}">
        @csrf
<div id="newtask">
      
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="  @error('title') is-invalid @enderror" value="{{ old('title') }}"  autofocus>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
       
            </div>
        <button type="submit" class="btn btn-primary">Add Todo</button>
     
    </form>
    </center>
@endsection