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
