<?php
//Алгоритм Дейкстры (Dijkstra's algorithm)

$graph = [
    'start' => [ 'a' => 5, 'b' => 2 ],

    'a' => [ 'c' => 3 ],

    'b' => [ 'a' => 2, 'c' => 6, 'd' => 7 ],

    'c' => [ 'fin' => 3 ],

    'd' => [ 'c' => 2, 'fin' => 0 ],

    'fin' => []
];

$costs = [
    'a' => 5,
    'b' => 2,
    'c' => INF,
    'd' => INF,
    'fin' => INF
];

$parents = [
    'a' => 'start',
    'b' => '',
    'c' => 'start',
    'd' => '',
    'fin' => ''
];

$processed = [];

$node = find_lowest_cost_node($costs);

while ($node != '') {
    $cost = $costs[$node];
    $neighbors = $graph[$node];

    foreach ($neighbors as $n => $value) {
        $new_cost = $cost + $neighbors[$n];
        if ($costs[$n] > $new_cost) {
            $costs[$n] = $new_cost;
            //$parents[$n] = $node;
        }
    }
    $processed[] = $node;
    $node = find_lowest_cost_node($costs);
}

test($costs);
// FUNCTIONS BELOW FUNCTIONS BELOW FUNCTIONS BELOW FUNCTIONS BELOW FUNCTIONS BELOW FUNCTIONS BELOW

function test ($a) {
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}

function find_lowest_cost_node($costs) {
    global $processed;
    $lowest_cost = INF;
    $lowest_cost_node = '';

    foreach ($costs as $node => $value) {
        if ($value < $lowest_cost && !in_array($node, $processed)) {
            $lowest_cost = $value;
            $lowest_cost_node = $node;
        }
    }

    return $lowest_cost_node;
}



