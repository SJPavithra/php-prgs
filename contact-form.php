<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    echo "Thank you, $name. We received your message: $message";
}
?>
<form method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Message: <textarea name="message"></textarea><br>
    <input type="submit" value="Send">
</form>
