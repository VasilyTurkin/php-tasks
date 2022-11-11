<?php

function sumArray(array $arr) : mixed
{
    if (count($arr) === 1) {
        return $arr[0];
    } elseif (count($arr) === 0) {
        return [];
    } else {
        $sum = array_shift($arr);
        return $sum + sumArray($arr);
    }
}

