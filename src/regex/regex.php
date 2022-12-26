<?php

// Задача 1

$str = 'message with and, and another and';

function countWord(string $str, string $word): string
{
    return preg_match_all('/' . $word . '/', $str);
}

var_dump(countWord($str, 'and'));

// Задача 2

$str = 'testmessage with testword test';

function replaceTest(string $str, string $symbol): string
{
    return preg_replace('/test/', $symbol, $str);
}

var_dump(replaceTest($str, ''));

// Задача 3

$str = '&.  some message 1234, with numbers -=+-??';

function clearString(string $str): string
{
    return preg_replace('/\W+/', ' ', $str);
}

var_dump(clearString($str));

// Задача 4

$str = 'Get 123 something 3out of your 0 system786775';

function extractNumbers(string $str): array
{
    preg_match_all('/\d+/', $str, $arrNumbers);
    return $arrNumbers;
}

var_dump(extractNumbers($str));

// Задача 5

$str = 'test    test       test';

function trimSpaces(string $str): string
{
    return preg_replace('/\s+/', '', $str);
}

var_dump(trimSpaces($str));

// Задача 6

$str = 'GivE somEone the benEfit of the doubt';

function countLetters($str, $letter): string
{
    return preg_match_all('/' . $letter . '/i', $str);
}

var_dump(countLetters($str, 'E'));
var_dump(countLetters($str, 'e'));

// Задача 7

$str = 'one123two_three';

function extractWords(string $str): mixed
{
    preg_match_all('/[a-z][[:alpha:]]+/is', $str, $arr);
    return $arr;
}

var_dump(extractWords($str));

