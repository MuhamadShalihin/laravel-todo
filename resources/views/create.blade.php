@extends('layouts.app')

@section('title', ' To Do - Create New Todo')

@section('content')
<div class="text-center mt-5">
    <h2>Create New Todo</h2>
    <br>
    <form class="row g-3 justify-content-center" method="POST" action="{{route('todo.store')}}">
        @csrf
        <div class="col-6">
            <input type="text" class="form-control" name="title" placeholder="Title">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-plus"></i>
                Add
            </button>
            <a href="#" class="btn btn-warning">
                <i class="bi bi-arrow-counterclockwise"></i>
                Reset
            </a>
        </div>
    </form>
</div>
@endsection