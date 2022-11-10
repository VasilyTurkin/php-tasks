<?php

function sumArray(array $arr): int
{
    if (count($arr) === 0) {
        return 0;
    }

    $sum = array_shift($arr);

    return $sum + sumArray($arr);
}
