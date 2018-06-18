<?php

function calculate($a, $b, $op)
{
    switch ($op) {
        case '+':
            return $a + $b;
            break;
        case '-':
            return $a - $b;
            break;
        case '*':
            return $a * $b;
            break;
        case '/':
            return $a / $b;
            break;
        default:
            return null;
    }
}

assert(4 == calculate(2, 2, '+'));
assert(6 == calculate(2, 3, '*'));
assert(3 == calculate(5, 2, '-'));
assert(2 == calculate(6, 3, '/'));
assert(null == calculate(2, 3, '&&'));