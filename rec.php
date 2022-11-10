<?php

//function fact(int $n)
//{
//    if ($n === 1) {
//        return 1;
//    }
//    return $n * fact($n - 1);
//}
//
//var_dump(fact(5));
//
//function fibo($i)
//{
//    if ($i == 0) return 0;
//    if ($i == 1 || $i == 2) {
//        return 1;
//    } else {
//        return fibo($i - 1) + fibo($i - 2);
//    }
//}
//
//var_dump(fibo(5));


$arr  = [2,3,5,3];

function sumArray(array $arr) {
    if (count($arr)) {
        $sum = array_shift($arr);
       return  $sum + sumArray($arr);
    }

}

var_dump(sumArray($arr));

