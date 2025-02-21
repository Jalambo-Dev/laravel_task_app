@extends('layout.app')

@section('content')
    <div class="container mt-4">
        <h1>TASK LIST APP</h1>
        <div class="offset-md-2 col-md-8">
            <!-- New Task Form -->
            <div class="card">
                <div class="card-header">
                    New Task
                </div>
                <div class="card-body">
                    @if (isset($task))
                        <form action="{{ url('/update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $task->id }}">
                            <div class="mb-3">
                                <label for="task-name" class="form-label">Task</label>
                                <input type="text" name="title" id="task-name" class="form-control"
                                    value="{{ $task->title }}">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-plus me-2"></i>Update Task
                                </button>
                            </div>
                        </form>
                    @else
                        <form action="create" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="task-name" class="form-label">Task</label>
                                <input type="text" name="title" id="task-name" class="form-control"
                                    placeholder="Add a new task...">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-plus me-2"></i>Add Task
                                </button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>

            <!-- Current Tasks -->
            <div class="card mt-4">
                <div class="card-header">
                    Current Tasks
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->title }}</td>
                                    <td>
                                        <form action="{{ url('/edit/' . $task->id) }}" method="GET" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-warning">
                                                <i class="fa fa-edit me-2"></i>Edit
                                            </button>
                                        </form>
                                        <form action="/delete/{{ $task->id }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash me-2"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
