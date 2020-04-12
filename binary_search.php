<?php
//binary search

function binary_search($array, $item) {
    $low = 0;
    $high =  count($array) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        //$guess = $array[$mid];

        if ($array[$mid] == $item)
            return $mid;
        if ($array[$mid] > $item)
            $high = $mid - 1;
        else
            $low = $mid + 1;
    }
    return NAN;
}

$a = [1, 3, 5, 7, 9, 11];

echo binary_search($a, 3);