<?php

/*Given an array of integers, calculate which fraction of its elements are positive, which fraction of its elements are negative, and which fraction of its elements are zeroes, respectively. Print the decimal value of each fraction on a new line.

Note: This challenge introduces precision problems. The test cases are scaled to six decimal places, though answers with absolute error of up to 10^-4 are acceptable.

Input Format

The first line contains an integer, N, denoting the size of the array.
The second line contains N space-separated integers describing an array of numbers .

Output Format

You must print the following 3 lines:

A decimal representing of the fraction of positive numbers in the array.
A decimal representing of the fraction of negative numbers in the array.
A decimal representing of the fraction of zeroes in the array.
Sample Input

6
-4 3 -9 0 4 1
Sample Output

0.500000
0.333333
0.166667*/

function plusMinus($arr)
{
    $len = count($arr);
    $pos = $neg = $zero = 0;

    for ($i = 0; $i < $len; $i++) {
        ($arr[$i] < 0) ? $neg++ :
            ($arr[$i] > 0 ? $pos++ : $zero++);
    }

    return array($pos/$len, $neg/$len, $zero/$len);

}

$handle = fopen("php://stdin","r");
$N = fgets($handle);
$nums = explode(" ", fgets($handle));
$ret = plusMinus($nums);
for ($i = 0; $i < 3; $i++) {
    print("$ret[$i]\n");
}
fclose($handle);