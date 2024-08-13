<?php
session_start();

if (!isset($_SESSION['todo_list'])) {
    $_SESSION['todo_list'] = [];
}
function generateUniqueId() {
    return uniqid();
}
function sortByPriority($a, $b) {
    $priorityMap = ['high' => 2, 'medium' => 1, 'low' => 0];
    return $priorityMap[$b['priority']] - $priorityMap[$a['priority']];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];

    $newTask = [
        'id' => generateUniqueId(),
        'task' => $task,
        'created_at' => date('Y-m-d H:i:s'),
        'priority' => $priority,
        'status' => $status
    ];

    $_SESSION['todo_list'][$newTask['id']] = $newTask;
    usort($_SESSION['todo_list'], 'sortByPriority');
    $successMessage = "Task added successfully!";
    $task =  $_SESSION['todo_list'];
    var_dump($task);
   
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
         unset($_SESSION['todo_list'][$id]);
    $_SESSION['todo_list'] = array_values($_SESSION['todo_list']); // Reindex array
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    
}
header("Location: index.php") //redirct to index.html form
?>