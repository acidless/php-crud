<?php
require_once "./TaskModel.php";

$model = new TaskModel();
$model->Update($_POST["task_id"], htmlentities($_POST["task_message"]));

echo "Task updated!";

if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>