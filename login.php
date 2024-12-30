<?php
$validUser = "admin";
$validPass = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $validUser && $password == $validPass) {
        echo "Welcome, $username!";
    } else {
        echo "Invalid username or password.";
    }
}
?>
<form method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
