<?php
function selectionSort($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        $min = $array[$i];
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $min) {
                $min = $array[$j];
                $array[$j]=$array[$i];
                $array[$i]=$min;
            }
        }
    }
    return $array;
}

$myArray = [3, 0, 2, 5, -1, 4, 1,45,68,2,6];
echo "Original Array :\n";
echo implode(', ', $myArray);
echo "<br>";
echo "\nSorted Array :\n";
echo implode(', ', selectionSort($myArray));