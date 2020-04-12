<?php

function bubbleSort ($a) {
    $massCount = count($a);
    for ($j = 0; $j < $massCount - 1; $j++) {
        for ($i = 0; $i < $massCount - $j - 1; $i++) {

            if ($a[$i] > $a[$i + 1]) { // 3 7 1 5 4, 3 1 7 5 4, 3 1 5 7 4, 3 1 5 4 7, 1 3 5 4 7, 1 3 4 5 7

                $tmp_var = $a[$i + 1];
                $a[$i + 1] = $a[$i];
                $a[$i] = $tmp_var;
            }
        }
    }
    return $a;
}

$array = array(7, 3, 1, 5, 4); // исходный массив
var_dump(bubbleSort($array));
