<?php
$file = fopen("storage.txt", "rt") or die ("Не удалось открыть файл");
$data = unserialize(fread($file,100));
fclose($file);
print_r($data);