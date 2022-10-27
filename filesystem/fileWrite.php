<?php
$array = [];

function set(array $array, string $key, string $value): array
{
    $array[$key] = $value;
    return $array;
}

$array = set($array, "first key", "first value");
$array = set($array, "second key", "second value");
print_r($array);

function get(array $array, string $key)
{
    return $array[$key] ?? null;
}

$key = get($array, "second key");
var_dump($key);

$key = get($array, "null key");
var_dump($key);

$fileName = "storage.txt";

$data = serialize($array);

$file = fopen($fileName, "w");
fwrite($file, $data);
fclose($file);





