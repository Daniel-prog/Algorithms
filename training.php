<?php
$graph = [
    'A' => ['B', 'C', 'D'],
    'B' => ['G', 'H'],
    'C' => ['G'],
    'D' => ['E', 'F'],
    'E' => [],
    'F' => [],
    'G' => [],
    'H' => []
];
$startNode = 'A';
$endNode   = 'H';

$searchQueue = [];
$searched    = [];

foreach($graph[$startNode] as $value) {
    $searchQueue[] = $value;
}
print_r($searchQueue);
$node = 'B';
foreach($graph[$node] as $value) {
    $searchQueue[] = $value;
}
print_r($searchQueue);