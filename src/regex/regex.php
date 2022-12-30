<?php

// Задача 1

$str = 'message with and, and another and';

function countWord(string $str, string $word): int
{
    return preg_match_all('/' . $word . '/', $str);
}

// Задача 2

$str = 'test message with testword test';

function replaceTest(string $str, string $symbol): string
{
    return preg_replace('/test/', $symbol, $str);
}

// Задача 3

$str = '&.  some message 1234, with numbers -=+-??';

function clearString(string $str): string
{
    $pattern = '/[^a-zA-Z0-9 ]+/';
    return trim(preg_replace($pattern, '', $str));
}

// Задача 4

$str = 'Get 123 something 3out of your 0 system786775';

function extractNumbers(string $str)

{
    preg_match_all('/\d+/', $str, $arrNumbers);
    return $arrNumbers[0];
}


// Задача 5

$str = 'test    test       test';

function trimSpaces(string $str): string
{
    return preg_replace('/\s+/', ' ', $str);
}

// Задача 6

$str = 'GivE somEone the benEfit of the doubt';

function countLetters($str, $letter): string
{
    return preg_match_all('/' . $letter . '/i', $str);
}

// Задача 7

$str = 'one123two_three';

function extractWords(string $str): mixed
{
    preg_match_all('/[a-z][[:alpha:]]+/is', $str, $arr);
    return $arr[0];
}

// Задача 8

function transformToCamelCase(string $str)
{
    $arr = [];

    $str = strtolower($str);

    preg_match_all('/[a-z]+/', $str, $matches);

    foreach ($matches[0] as $item) {
        $arr[] = ucfirst($item);
    }
    return lcfirst(implode('_', ($arr)));
}

// Задача 9

function removeHtmlTags(string $str): string
{
    $pattern = '/<[^>]+>/';

    return preg_replace($pattern, '', $str);

}

// Задача 10

function getPhone(string $str): mixed
{
    $pattern = '/tel\.\s*[0-9]+ | tel\s*[0-9]+/xi';

    preg_match_all($pattern, $str, $matches);

    return implode('', $matches[0]);

}

// Задача 11

function isCharRepeat(string $str, string $letter, int $int) : bool
{
    $count =  preg_match_all('/'.$letter.'/', $str);

    return $count == $int;

}
