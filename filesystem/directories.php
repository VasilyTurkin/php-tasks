<?php

function duplicateDirsTree(string $fromDir, string $toDir, int $depth): void
{
    if ($depth === 0) {
        return;
    }
    $files = scandir($fromDir);
    foreach ($files as $file) {

        $from = $fromDir . '/' . $file;
        if (is_dir($from) && $file !== "." && $file !== "..") {
            $to = $toDir . '/' . $file;
            mkdir($to);
            duplicateDirsTree($from, $to, $depth - 1);
        }
    }
}

