<?php

function selectionSort($m)
{
    $masCount = count($m);

    for ($i = 0; $i < $masCount - 1; $i++) {
        $min = $i;

        for ($k = $i + 1; $k < $masCount; $k++) {
            if ($m[$k] < $m[$min]) {
                $min = $k;
            }
        }

        $temp = $m[$i];
        $m[$i] = $m[$min];
        $m[$min] = $temp; // 1 4 30 32 5
    }

    return $m;
}

$a = array(32, 4, 30, 1, 5);

var_dump(selectionSort($a));