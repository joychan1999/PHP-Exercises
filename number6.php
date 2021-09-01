<!-- Write a PHP function that checks whether a passed string is a palindrome -->

<?php
function PalindromeCheck($string)
{
    if (strrev($string) == $string) {
        return 1;
    } else {
        return 0;
    }
}

$inputString = "DAD";
if (PalindromeCheck($inputString)) {
    echo "Palindrome";
} else {
    echo "Not a Palindrome";
}
?>