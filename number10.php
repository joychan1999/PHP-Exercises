<!-- Write a PHP program to sort a list of elements using Bubble sort -->

<?php
// function for bubble sort
function BubbleSort(&$array, $n)
{
    $temp='';
    for ($i = 0; $i < $n; $i++) {
        for ($x = 0; $x < $n - $i - 1; $x++) {
            if ($array[$x] > $array[$x + 1]) {
                $temp = $array[$x];
                $array[$x] = $array[$x + 1];
                $array[$x + 1] = $temp;
            }
        }
    }
}

// function to print array
function PrintingArray($Array, $n)
{
    for ($i = 0; $i < $n; $i++)
        echo $Array[$i] . " ";
    echo "\n";
}

// test the code
$MyArray = array(1, 10, 23, 50, 4, 9, -4);
$n = sizeof($MyArray);
echo "Original Array:\n";
PrintingArray($MyArray, $n);

bubblesort($MyArray, $n);
echo "\nSorted Array:\n";
PrintingArray($MyArray, $n);
?>