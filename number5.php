<!-- Write a PHP function that checks whether a string is all lowercase. -->
<?php
function IsLowercase($str1)
{
    for ($i = 0; $i < strlen($str1); $i++) {
        if (
            ord($str1[$i]) >= ord('A') &&
            ord($str1[$i]) <= ord('Z')
        ) {
            return false;
        }
    }
    return true;
}
var_dump(IsLowercase('joselito'));
var_dump(IsLowercase('joSelito'));
?>