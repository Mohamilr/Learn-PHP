<?php

function calc (int $fn, string $operator, int $sn) {
    switch ($operator) {
        case '+':
            return $fn + $sn;
        case '-':
            return $fn - $sn;
        case '*':
            return $fn * $sn;
        case '/':
            return $fn / $sn;
    }
}

echo calc(5, "+", 5)

?>