<?php
function solveMeFirst($a,$b){
    // Hint: Type return $a + $b; below
    return $a + $b;
}
$handle = fopen ("php://stdin","r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a,(int)$_b);
print ($sum);
fclose($handle);
/*
1 1 1 0 0 0
0 1 0 0 0 0
1 1 1 0 0 0
0 9 2 -4 -4 0
0 0 0 -2 0 0
0 0 -1 -2 -4 0
*/
/*
855677723
75865401
763845832
75865401
709571211
645102173
112869154
763845832
449768243
757848208
91038209
205970905
783321829
372160176
384358662
67467208
935143105
384358662
309720694
138234911*/
