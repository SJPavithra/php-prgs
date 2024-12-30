<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $rate = 0.85; // Example conversion rate
    $converted = $amount * $rate;
    echo "Converted amount: $converted EUR";
}
?>
<form method="post">
    Amount in USD: <input type="text" name="amount"><br>
    <input type="submit" value="Convert">
</form>
