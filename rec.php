<?php

$arr = [2, 3, 5, 3];

function sumArray(array $arr)
{
    if (count($arr)) {
        $sum = array_shift($arr);
        return $sum + sumArray($arr);
    }

}

var_dump(sumArray($arr));

