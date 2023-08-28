<?php

// loop for para calcular e exibir a sequência de Fibonacci até o termo indicado

function fibonacci($num): void
{
    $next = 0;
    $current = 1;
    if (($num === 0) || ($num === 1)) {
        echo $num;
    }
    for ($i = 1; $i < $num; $i++) {
        $previous = $next;
        $next = $current;
        echo $current = $previous + $next;
        echo ' - ';
    }
}

function fibonacciRecursion($num)
{
    if (($num === 0) || ($num === 1)) {
        echo $num;
    }
    return fibonacciRecursion($num - 1) + fibonacciRecursion($num - 2);
}

fibonacci(40);
