@extends('layouts.app')

@section('title', ' To Do - Update Existing Todo')

@section('content')
<div class="text-center mt-5">
    <h2>Update Todo #{{ $todos->id }}</h2>
    <form  method="POST" action="{{route('todo.update', ['todo'=>$todos->id])}}">
        @csrf
        @method('PUT')
            <div class="row justify-content-center mt-5">    
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{$todos->title}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="is_completed" id="" class="form-control">
                        <option value="1" @if($todos->is_completed==1) selected @endif>Complete</option>
                        <option value="0" @if($todos->is_completed==0) selected @endif>Pending</option>
                    </select>
                </div>    
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-arrow-repeat"></i>
                        Update
                    </button>
                    <a href="#" class="btn btn-warning">
                        <i class="bi bi-arrow-counterclockwise"></i>
                        Reset
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection