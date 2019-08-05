<?php
$MAX =100;
function printDiagonalSums($mat,$n)
{
    global $MAX;
    $principal = 0;
    $secondary = 0;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == $j) {
                $principal += $mat[$i][$j];
            }
            if (($i + $j) == ($n - 1)) {
                $secondary += $mat[$i][$j];
            }
        }
    }
    echo "Principal Diagonal:",
    $principal, "\n";
    echo "Secondary Diagonal:",
    $secondary, "\n";
}
    $a = array (array ( 1, 2, 3, 4 ),
        array ( 5, 6, 7, 8 ),
        array ( 1, 2, 3, 4 ),
        array ( 5, 6, 7, 8 ));
    printDiagonalSums($a, 4);

