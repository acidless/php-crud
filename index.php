<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <style>
        h1 {
            margin-bottom: 1em;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
        }

        .task {
            background: lightgray;
            padding: 0.5em;
            display: flex;
            justify-content: space-between;
        }

        .task:not(:last-child) {
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
<form action="./create-task.php" method="POST">
    <input name="task_message" type="text" placeholder="Task">
    <button>Создать</button>
</form>


<h1>Tasks</h1>
<?php
require_once "./TaskModel.php";
$model = new TaskModel();
$tasks = $model->GetAll();

foreach ($tasks as $task) {
    $date = new DateTime($task['task_time']);

    echo "<div class='task'><p>" . $task['task_message'] . "</p><time>" . $date->format('Y-m-d H:i:s') . "</time></div>";
}
?>
</body>
</html>