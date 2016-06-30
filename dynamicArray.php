<?php

/*Create a list, seqList, of N empty sequences, where each sequence is indexed from 0 to N-1. The elements within each of the  sequences also use 0-indexing.
Create an integer, lastAns, and initialize it to 0.
The 2 types of queries that can be performed on your list of sequences () are described below:
Query: 1 x y
Find the sequence, seq, at index (x XOR lastAns) % N in seqList.
Append integer y to sequence seq.
Query: 2 x y
Find the sequence, seq, at index (x XOR lastAns) % N in seqList.
Find the value of element y % seq.length and assign it to lastAns.
Print the new value of lastAns on a new line
Task
Given N, Q, and Q queries, execute each query.

Input Format

The first line contains two space-separated integers, N (the number of sequences) and  Q(the number of queries), respectively.
Each of the  subsequent lines contains a query in the format defined above.

Constraints
1 <= N,Q <= 10^5
0 <= x,y, <= 10^9

It is guaranteed that query type  will never query an empty sequence or index.

Output Format

For each type 2 query, print the updated value of lastAns on a new line.

Sample Input

2 5
1 0 5
1 1 7
1 0 3
2 1 0
2 1 1
Sample Output

7
3*/

function arrayFunc(&$arr, $query, &$lastAns)
{
    //adds to array
    if ($query[0] == 1) {
        //have to cast values to ints to get them to behave as expected
        $arr[(((int)$query[1] ^ (int)$lastAns) % count($arr))][] = $query[2];
    }
    //finds vals in specified sequence and echos
    else {
        $seq = $arr[(((int)$query[1] ^ (int)$lastAns) % count($arr))];
        $lastAns = $seq[($query[2] % count($seq))];
        echo($lastAns."\n");
    }
};



$handle = fopen("php://stdin", "r");

$in = explode(" ", trim(fgets($handle)));
$N = $in[0];
$Q = $in[1];
$lastAns = 0;

//initialize empty array
for ($i = 0; $i < $N; $i++) {
    $arr[$i] = [];
}

//run queries
for ($i = 0; $i < $Q; $i++) {
    arrayFunc($arr, explode(" ", trim(fgets($handle))), $lastAns);
}
fclose($handle);