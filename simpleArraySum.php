<?php

/*Given an array of N integers, can you find the sum of its elements?

Input Format

The first line contains an integer, N , denoting the size of the array.
The second line contains N space-separated integers representing the array's elements.

Output Format

Print the sum of the array's elements as a single integer.

Sample Input

6
1 2 3 4 10 11

Sample Output

31*/



function arraySum($arr){
    $len = count($arr);
    $sum = 0;
    for ($i = 0; $i < $len; $i++){
            $sum += $arr[$i];
    }
    return $sum;
}

$handle = fopen("php://stdin","r");
$N = fgets($handle);
$nums = explode(" ",fgets($handle));
$sum = arraySum($nums);
print($sum);
fclose($handle);