<?php

// Задача 1

$str = 'message with and, and another and';

function countWord(string $str, string $word): int
{
    return preg_match_all('/' . $word . '/', $str);
}

// Задача 2

$str = 'testmessage with testword test';

function replaceTest(string $str, string $symbol): string
{
    return preg_replace('/test/', $symbol, $str);
}

// Задача 3

$str = '&.  some message 1234, with numbers -=+-??';

function clearString(string $str): string
{
    return preg_replace('/([^a-zA-Z0-9]+)/', ' ', $str);
}

// Задача 4

$str = 'Get 123 something 3out of your 0 system786775';

function extractNumbers(string $str): array
{
    preg_match_all('/\d+/', $str, $arrNumbers);
    return $arrNumbers;
}

// Задача 5

$str = 'test    test       test';

function trimSpaces(string $str): string
{
    return preg_replace('/\s+/', '', $str);
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
    return $arr;
}



