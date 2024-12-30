<?php
session_start();
if (!isset($_SESSION['tasks'])) $_SESSION['tasks'] = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['task'])) {
        $_SESSION['tasks'][] = $_POST['task'];
    }
}
?>
<ul>
    <?php foreach ($_SESSION['tasks'] as $task) { echo "<li>$task</li>"; } ?>
</ul>
<form method="post">
    New Task: <input type="text" name="task"><br>
    <input type="submit" value="Add">
</form>
