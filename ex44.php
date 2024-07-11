<?php
// Initialize tasks array or retrieve from session
session_start();
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = array();
}

// Handle task addition
if (isset($_POST['submit']) && !empty($_POST['task'])) {
    $new_task = $_POST['task'];
    array_push($_SESSION['tasks'], array('task' => $new_task));
}


// Display tasks
foreach ($_SESSION['tasks'] as $key => $task) {
    $task_text = htmlspecialchars($task['task']);
    echo "<li >$task_text 
    
          </li>";
}
?>
