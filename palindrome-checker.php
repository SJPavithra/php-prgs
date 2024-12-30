<?php
function isPalindrome($string) {
    $cleaned = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($string));
    return $cleaned == strrev($cleaned);
}

$word = "madam";
echo "$word is " . (isPalindrome($word) ? "a palindrome" : "not a palindrome");
?>
