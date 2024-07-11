<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

</head>
<body>
    <div class="container">
        <h1>Todo List</h1>
        <form action="ex44.php" method="POST">
            <input type="text" name="task" placeholder="Enter a new task" required>
            <button type="submit" name="submit">Add Task</button>
        </form>
        
        <ul class="task-list">
            
        </ul>
    </div>
</body>
</html>
