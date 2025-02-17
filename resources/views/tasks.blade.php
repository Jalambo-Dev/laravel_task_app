<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .add-task {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            color: white;
        }

        .add-btn {
            background-color: #4CAF50;
        }

        .add-btn:hover {
            background-color: #45a049;
        }

        .tasks {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .task {
            display: flex;
            align-items: center;
            padding: 15px;
            background-color: #f8f8f8;
            border-radius: 5px;
            gap: 10px;
        }

        .task span {
            flex: 1;
            font-size: 16px;
        }

        .task-actions {
            display: flex;
            gap: 5px;
        }

        .delete-btn {
            background-color: #ff4444;
        }

        .edit-btn {
            background-color: #ffd344;
        }

        .delete-btn:hover {
            background-color: #cc0000;
        }

        .edit-btn:hover {
            background-color: #ccb100;
        }

        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }

            .add-task {
                flex-direction: column;
            }

            .add-task button {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>TASK APP</h1>
        @if (isset($task))
            <form action="{{ url('/update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $task->id }}">
                <div class="add-task">
                    <input type="text" name="title" value="{{ $task->title }}" placeholder="Edit a task...">
                    <button type="submit" class="add-btn">Update Task</button>
                </div>
            </form>
        @else
            <form action="create" method="POST">
                @csrf
                <div class="add-task">
                    <input type="text" name="title" placeholder="Add a new task...">
                    <button type="submit" class="add-btn">Add Task</button>
                </div>
            </form>
        @endif

        <div class="tasks">
            @foreach ($tasks as $task)
                <div class="task">
                    <span>{{ $task->title }}</span>
                    <div class="task-actions">
                        <form action="{{ url('/edit/' . $task->id) }}" method="GET" style="display: inline;">
                            @csrf
                            <button type="submit" class="edit-btn">Edit</button>
                        </form>
                        <form action="/delete/{{ $task->id }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
