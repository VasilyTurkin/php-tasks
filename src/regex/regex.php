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
    $arrNumbers = [];

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
    $arr = [];

    preg_match_all('/[a-z][[:alpha:]]+/is', $str, $arr);
    return $arr[0];
}

// Задача 8

function transformToCamelCase(string $str)
{
    $matches = [];
    $str = strtolower($str);
    preg_match_all('/[a-z]+/', $str, $matches);

    $arr = [];
    foreach ($matches[0] as $item) {
        $arr[] = ucfirst($item);
    }

    return lcfirst(implode('', ($arr)));
}

// Задача 9

function removeHtmlTags(string $str): string
{

    return preg_replace('/<[^>]+>/', '', $str);
}

// Задача 10

function getPhone(string $str): mixed
{
    $matches = [];
    $pattern = '/tel\.?\s\d+/i';

    preg_match_all($pattern, $str, $matches);

    return implode('', $matches[0]);
}

// Задача 11

function isCharRepeat(string $str, string $letter, int $matchCount): bool
{
    $pattern = "/$letter{" . $matchCount . '}/';

    return (bool)preg_match_all($pattern, $str);
}

// Задача 12

function hasNumber(string $str,): bool
{
    $pattern = '/\b\d{3,5}\b/';

    return (bool)preg_match_all($pattern, $str);
}

// Задача 13

function isAlpaNumeric(string $str): bool
{
    $pattern = '/^\w+$/';

    return (bool)preg_match_all($pattern, $str);
}

// Задача 14

function parseParams(string $url): array
{
    $matches = [];
    $pattern = '/\?(.*?)$/';
    preg_match_all($pattern, $url, $matches);

    if (!isset($matches[1][0])) {
        return [];
    }

    $args = explode('&', $matches[1][0]);
    $result = [];
    foreach ($args as $arg) {
        $matches = [];
        preg_match_all('/(\w+)=(.*)/', $arg, $matches);
        $result[$matches[1][0]] = $matches[2][0];
    }

    return $result;
}

// Задача 15

function isValidatePhoneNumber(string $str)
{
    return (bool)preg_match_all('/^\+7\d{10}+$/',$str);

}
