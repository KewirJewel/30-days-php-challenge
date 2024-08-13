<?php
session_start();
if (!isset($_SESSION['tasks'])) {
    echo $_SESSION['tasks'] = [];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    switch ($action) {
        case 'add':
            addTask($_POST['task']);
            break;
        case 'edit':
            editTask($_POST['taskId'], $_POST['newTask']);
            break;
        case 'delete':
            deleteTask($_POST['taskId']);
            break;
        case 'complete':
            completeTask($_POST['taskId']);
            break;
    }
}

function addTask($task) {
     if (isset($_POST['add_task'])) {
    $newTask = $_POST['task'];
    $taskId = uniqid();
    $_SESSION['tasks'][] = $newTask;
    $_SESSION['tasks'][$taskId] = [
        'text' => $task,
        'completed' => false,
        'priority' => 'Medium','High','Low',
        'deadline' => null,
        'created_at' => date('Y-m-d H:i:s')];
    }
}

function editTask($taskId, $newTask) {
    if (isset($_SESSION['tasks'][$taskId])) {
        if (isset($_POST['edit_task'])) {
            $newTask = $_POST['edited_task'];
             $_SESSION['tasks'][$taskId]['text'] = $newTask;
    }
}
}

function deleteTask($taskId) {
    if (isset($_SESSION['tasks'][$taskId])) {
        if (isset($_POST['delete_task'])) {
            unset($_SESSION['tasks'][$taskId]);
            die;
            $_SESSION['tasks'] = array_values($_SESSION['tasks']);
    }
}
}

function completeTask($taskId) {
    if (isset($_SESSION['tasks'][$taskId])) {
        $_SESSION['tasks'][$taskId]['completed'] = true;
    }
}
header('Location: index.html');
exit;
?>