<?php

// Задача 1

function countWord(string $str, string $word): int
{
    return preg_match_all('/' . $word . '/', $str);
}

// Задача 2

function replaceTest(string $str, string $symbol): string
{
    return preg_replace('/test/', $symbol, $str);
}

// Задача 3

function clearString(string $str): string
{
    $pattern = '/[^a-zA-Z0-9 ]+/';
    return trim(preg_replace($pattern, '', $str));
}

// Задача 4

function extractNumbers(string $str)
{
    $partsNumbers = [];

    preg_match_all('/\d+/', $str, $partsNumbers);

    return $partsNumbers[0];
}

// Задача 5

function trimSpaces(string $str): string
{
    return preg_replace('/\s+/', ' ', $str);
}

// Задача 6

function countLetters($str, $letter): string
{
    return preg_match_all('/' . $letter . '/i', $str);
}

// Задача 7

function extractWords(string $str): mixed
{
    $parts = [];

    preg_match_all('/[a-zA-Z]+/i', $str, $parts);
    return $parts[0];
}

// Задача 8

function transformToCamelCase(string $str): string
{
    $matches = [];
    $str = strtolower($str);
    preg_match_all('/[a-z]+/', $str, $matches);

    $parts = [];
    foreach ($matches[0] as $item) {
        $parts[] = ucfirst($item);
    }

    return lcfirst(implode('', $parts));
}

// Задача 9

function removeHtmlTags(string $str): string
{

    return preg_replace('/<[^>]+>/', '', $str);
}

// Задача 10

function getPhone(string $str): string
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

function hasNumber(string $str): bool
{
    $pattern = '/\b\d{3,5}\b/';

    return (bool)preg_match_all($pattern, $str);
}

// Задача 13

function isAlphaNumeric(string $str): bool
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

function isValidPhoneNumber(string $str): bool
{
    return (bool)preg_match_all('/^\+7\d{10}+$/', $str);
}

// Задача 16

function splitWordsNums(string $str): string
{
    $pattern = '/([a-z]+)([0-9]+)/';
    $replacement = ' $1 $2';

    return ltrim(preg_replace($pattern, $replacement, $str));
}

