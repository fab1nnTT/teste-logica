<?php

//loop for irá iterar de 1 até 50 e a variável $i representa o número atual da iteração.

for ($i = 1; $i <= 50; $i++) {
    $output = "";

    switch (true) {
        case ($i % 3 == 0 && $i % 5 == 0):
            $output = "FizzBuzz";
            break;
        case ($i % 3 == 0):
            $output = "Fizz";
            break;
        case ($i % 5 == 0):
            $output = "Buzz";
            break;
        default:
            $output = $i;
    }

    echo $output . " ";
}

?>