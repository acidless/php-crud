<?php
require_once "./TaskModel.php";

$model = new TaskModel();
$model->Delete($_POST["task_id"]);

echo "Task removed!";

if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}

?>