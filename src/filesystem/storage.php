<?php

$fileName = "storage.txt";

function readStorage(): array
{
    global $fileName;
    $content = trim(file_get_contents($fileName));
    $lines = empty($content) ? [] : explode("\n", $content);
    $storage = [];
    foreach ($lines as $line) {
        $index = strpos($line, ':');
        $storageKey = substr($line, 0, $index);
        $storageValue = unserialize(substr($line, $index + 1));
        $storage[$storageKey] = $storageValue;
    }
    return $storage;
}

function put(string $key, $value): void
{
    global $fileName;
    $storage = readStorage();
    $storage[$key] = $value;
    $lines = [];
    foreach ($storage as $k => $v) {
        $v = serialize($v);
        $lines[] = $k . ":" . $v . "\n";
    }
    $content = implode('', $lines);
    file_put_contents($fileName, $content);
}

function get(string $key)
{
    $storage = readStorage();
    return $storage[$key] ?? null;
}

