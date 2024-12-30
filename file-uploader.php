<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    move_uploaded_file($file['tmp_name'], "uploads/" . $file['name']);
    echo "File uploaded successfully.";
}
?>
<form method="post" enctype="multipart/form-data">
    Choose file: <input type="file" name="file"><br>
    <input type="submit" value="Upload">
</form>
