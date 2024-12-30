<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $bmi = $weight / ($height * $height);
    echo "Your BMI: " . round($bmi, 2);
}
?>
<form method="post">
    Weight (kg): <input type="text" name="weight"><br>
    Height (m): <input type="text" name="height"><br>
    <input type="submit" value="Calculate BMI">
</form>
