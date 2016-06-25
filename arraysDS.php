<?php

/*An array is a type of data structure that stores elements of the same type in a contiguous block of memory. In an array, A, of size N, each memory location has some unique index, i (where 0<=i<=N), that can be referenced as A[i] (you may also see it written as A_i).

Given an array, A, of N integers, print each element in reverse order as a single line of space-separated integers.

Note: If you've already solved our C++ domain's Arrays Introduction challenge, you may want to skip this.

Input Format

The first line contains an integer, N (the number of integers in A).
The second line contains N space-separated integers describing .

Constraints

1<= N <= 10^3
1 <= A_i <= 10^4
Output Format

Print all N integers in A in reverse order as a single line of space-separated integers.

Sample Input

4
1 4 3 2
Sample Output

2 3 4 1*/

function reverser($arr)
{
    $temp = array();
    foreach ($arr as $key){
        array_unshift($temp,$key);
    }
    unset($key);
    return implode(" ", $temp);
}

$handle = fopen("php://stdin", "r");
$N = fgets($handle);
$nums = explode(" ",trim(fgets($handle)));
print(reverser($nums));
fclose($handle);