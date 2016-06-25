<?php

/*Consider a staircase of size N = 4:

   #
  ##
 ###
####
Observe that its base and height are both equal to N, and the image is drawn using # symbols and spaces. The last line is not preceded by any spaces.

Write a program that prints a staircase of size N.

Input Format

A single integer, N, denoting the size of the staircase.

Output Format

Print a staircase of size  using # symbols and spaces.

Note: The last line must have  spaces in it.

Sample Input

6 
Sample Output

     #
    ##
   ###
  ####
 #####
######*/

function staircase($num){
    $space = $hash = "";
    for ($i = 1; $i <= $num; $i++) {
        $space = str_repeat(" ", $num -$i);
        $hash = str_repeat("#", $i);
        print("$space$hash\n");
    }
}

$handle = fopen("php://stdin", "r");
$N = fgets($handle);
staircase($N);
fclose($handle);