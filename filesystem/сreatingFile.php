<?php

function set(string $key, $value): void
{
    $fileName = "storage.txt";
    $arrayData = [];
    $arrayData[$key] = $value;
    $array = serialize($arrayData);
    file_put_contents($fileName, $array, FILE_APPEND);

    $myArray = file_get_contents($fileName);
    $dataFile = unserialize($myArray);
    foreach ($dataFile as $newKey => $oldValue) {
        if ($newKey === $key) {
            $dataFile[$newKey] = $value;
        } else {
            $dataFile[$key] = $value;
        }
        file_put_contents($fileName, serialize($dataFile));
    }

}

set("key1", 1111111);
set("key2", "value2");
set("key3", "value3");


function get(string $key)
{
    $fileName = "storage.txt";
    $myArray = file_get_contents($fileName);
    $dataFileFile = unserialize($myArray);
    foreach ($dataFileFile as $searchKey => $value) {
        if ($searchKey === $key) {
            return $value;
        }
    }
    return '';
}

var_dump(get("key1"));
var_dump(get("key2"));
var_dump(get("key3"));


