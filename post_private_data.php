<?php

function deleteOldFiles($dirPath)
{
    if (!file_exists($dirPath)) {
        return;
    }

    $files = [];
    foreach (new DirectoryIterator($dirPath) as $file) {
        if ($file->isDot() || $file->getExtension() != 'json') continue;

        $files[] = $file;
    }

    while (count($files) > 100) {
        $oldestIndex = 0;
        $oldestFile = $files[0];
        foreach ($files as $index => $file) {
            if ($file->getCTime() < $oldestFile->getCTime()) {
                $oldestIndex = $index;
                $oldestFile = $file;
            }
        }

        unlink($oldestFile->getPath());
        unset($files[$oldestIndex]);
        $files = array_values($files);
    }
}

$dirPath = './tmp/private';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $json = json_encode($_POST);
    if (strlen($json) < 1000) {
        deleteOldFiles($dirPath);

        if (!file_exists($dirPath)) {
            mkdir($dirPath);
        }

        $id = rand();
        $fileName = $dirPath . '/data_' . $id . '.json';
        $fileHandle = fopen($fileName, 'w');
        fwrite($fileHandle, json_encode($_POST));
        fclose($fileHandle);

        header('Content-Type: application/json');
        echo json_encode([
            'id' => $id,
        ]);
    } else {
        http_response_code(400);
        echo 'POST body to big.';
    }
} else {
    http_response_code(400);
    echo 'Use POST.';
}

