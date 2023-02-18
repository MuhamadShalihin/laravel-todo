@extends('layouts.app')

@section('title',  'To Do - Index')

@section('content')
<div class="text-center">
    <h2>Todo List</h2>
    <br>
    <a href="todo/create" class="btn btn-primary">
        <i class="bi bi-plus"></i>
        New Todo(s)
    </a>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Status</th>
                    {{-- @if (Auth::check())
                    <th scope="col">Action</th>
                    @endif --}}
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                {{-- @php $counter=1 @endphp --}}

                @foreach($todos as $todo)
                    <tr>
                        <th>{{ $todo->id }}</th>
                        <td>{{ $todo->title }}</td>
                        <td>{{ $todo->created_at }}</td>
                        <td>
                            @if($todo->is_completed)
                                <div class="badge bg-success">Completed</div>
                            @else
                                <div class="badge bg-warning">Pending</div>
                            @endif
                        </td>
                        {{-- @if (Auth::check())
                        <td>
                            <a href="todo/{{ $todo->id }}/edit" class="btn btn-info">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('todo.destroy', ['todo' => $todo->id]) }}" method="post" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form> 
                        </td>
                        @endif --}}
                        <td>
                            <a href="todo/{{ $todo->id }}/edit" class="btn btn-info">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('todo.destroy', ['todo' => $todo->id]) }}" method="post" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form> 
                        </td>
                    </tr>

                    {{-- @php $counter++; @endphp --}}

                @endforeach
                </tbody>
            </table>
            <br>
            {{ $todos->links() }}
        </div>
    </div>
</div>
@endsection