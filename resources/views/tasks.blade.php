<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task App</title>
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
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
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

        .task input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .task span {
            flex: 1;
            font-size: 16px;
        }

        .task.completed span {
            text-decoration: line-through;
            color: #888;
        }

        .task button {
            background-color: #ff4444;
            padding: 5px 10px;
            font-size: 14px;
        }

        .task button:hover {
            background-color: #cc0000;
        }

        .filters {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .filters button {
            background-color: #666;
        }

        .filters button:hover {
            background-color: #555;
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
        <h1>Task Manager</h1>

        <div class="add-task">
            <input type="text" placeholder="Add a new task...">
            <button>Add Task</button>
        </div>

        <div class="tasks">
            <div class="task">
                <input type="checkbox">
                <span>Complete the project presentation</span>
                <button>Delete</button>
            </div>
            <div class="task completed">
                <input type="checkbox" checked>
                <span>Schedule team meeting</span>
                <button>Delete</button>
            </div>
            <div class="task">
                <input type="checkbox">
                <span>Review code changes</span>
                <button>Delete</button>
            </div>
        </div>

        <div class="filters">
            <button>All</button>
            <button>Active</button>
            <button>Completed</button>
        </div>
    </div>
</body>

</html>
