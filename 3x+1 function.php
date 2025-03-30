<?php
// collatz_functions.php

function collatz_sequence($n) {
    $values = [];
    $max_value = $n;
    $count = 0;
    
    while ($n != 1) {
        $values[] = $n;
        if ($n % 2 == 0) {
            $n /= 2;
        } else {
            $n = 3 * $n + 1;
        }
        $count++;
        $max_value = max($max_value, $n);
    }
    
    $values[] = 1;
    return [$values, $max_value, $count];
}

function analyze_collatz_range($start, $end) {
    $results = [];
    
    for ($num = $start; $num <= $end; $num++) {
        list(, $max_value, $iterations) = collatz_sequence($num);
        $results[] = [$num, $max_value, $iterations];
    }
    
    $max_iterations = max($results, fn($a, $b) => $a[2] <=> $b[2]);
    $min_iterations = min($results, fn($a, $b) => $a[2] <=> $b[2]);
    $highest_value = max($results, fn($a, $b) => $a[1] <=> $b[1]);
    
    return [$results, $max_iterations, $min_iterations, $highest_value];
}
?>
