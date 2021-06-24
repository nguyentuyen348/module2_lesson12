<?php
function insertionSort($myArray):array
{
    for ($i=0;$i<count($myArray);$i++){
        $val=$myArray[$i];
        $j=$i-1;
        while ($j>=0 && $myArray[$j]> $val){
            $myArray[$j+1]=$myArray[$j];
            $j--;
        }
        $myArray[$j+1]=$val;
    }
    return $myArray;
}
$array= array(3,54,5,6,8,5,2,4);
echo "Original Array :\n";
echo implode(',',$array);
echo '<br>';
echo "\nSorted Array :\n";
print_r(insertionSort($array));